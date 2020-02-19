<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginregisterController extends Controller
{
    public function llcregister ()
    {
        return view('llcregister');
    }

    public function registerprocess (Request $request)
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $data = [
            'name' => $request->input('name'),  
            'email' => strtolower($request->input('name')), 
            'password' =>bcrypt($request->input('name')), 
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
        return view('llclogin');
    }

    public function loginprocess ()
    {
        
    }
    
}
