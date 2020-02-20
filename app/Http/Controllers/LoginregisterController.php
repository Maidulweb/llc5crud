<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class LoginregisterController extends Controller
{
    public function llcregister ()
    {
        return view('loginregister.llcregister');
    }

    public function registerprocess (Request $request)
    {

        $this->validate($request, [
            'name' => 'required|max:20|min:3|regex:/^[a-z A-Z]+$/u',
            'email' => 'required',
            'password' => 'required',
        ], [
            'name.required' => 'First name must be required !',
            'name.max' => 'Must be Maximum 20 charcters !',
            'name.min' => 'Must be Maximum 3 charcters !',
            'name.regex' => 'Must be letter !',
          ]);

        $data = [
            'name' => $request->input('name'),
            'email' => strtolower($request->input('email')),
            'password' =>bcrypt($request->input('password')),
        ];

        try
        {

         User::create($data);

            session()->flash('message', 'Successfully registration!');
            session()->flash('type', 'success');

            return redirect()->route('llclogin');

        }catch(Exception $e){

            session()->flash('message', $e->getMessage());
            session()->flash('type', 'danger');

            return redirect()->back();

        }
    }

    public function llclogin ()
    {
        return view('loginregister.llclogin');
    }

    public function loginprocess (Request $request)
    {

        try {
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {

                session()->flash('message', 'Successfully Login!');
                session()->flash('type', 'success');

                return redirect()->route('index');
            }
        }catch (Exception $e)
        {
            session()->flash('message', $e->getMessage());
            session()->flash('type', 'danger');

            return redirect()->back();
        }

    }

    public function llcprofile ()
    {
        return view('loginregister.llcprofile');
    }

    public function llclogout (Request $request)
    {
        Auth::logout();

        session()->flash('message', 'Successfully Logout!');
        session()->flash('type', 'success');

        return redirect()->back();
    }

}
