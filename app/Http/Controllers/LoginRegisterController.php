<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoginRegister;
class LoginRegisterController extends Controller
{
    public function register ()
    {
        return view('register');
    }

    public function registerprocess (Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:30|min:3',
            'username' => 'required|max:30|min:3',
            'email' => 'required',
            'password' => 'required',
        ]);
        $variable = new LoginRegister;
        $variable->name = $request->name;
        $variable->username = $request->username;
        $variable->email = $request->email;
        $variable->password = $request->password;
        $variable->save(); 
        return redirect()->route('login')->with('message', 'Successfuly Registration!');

        
    }
    public function login ()
    {
        return view('login');
    }
}
