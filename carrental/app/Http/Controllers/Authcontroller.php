<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Authcontroller extends Controller
{
    public function getlogin(){
        return view ('admin.login');
    }

    public function postLogin(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        $validated=auth()->attempt([
            'email'=>$request->email,
            'password'=>$request->password,
            'is_admin'=>1
        ]);

        if($validated){
            return redirect()->route('dashboard')->with('success','login Successful');
        }else {
            return redirect()->back()->with('error', 'invalid  credentials');
        }

    }
}
