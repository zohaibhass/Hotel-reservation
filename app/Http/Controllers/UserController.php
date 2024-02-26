<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{




    public function login(Request $request){

        $request->validate([
            "email"=>'required|email',
            'password'=>'required|max:14|min:8',
        ]);

        $credantials=$request->only('email','password');

        if (Auth::attempt($credantials)){
            return redirect()->intended('dashboard');
        }
       return redirect()->back()->with('error','Invalid credentials');
    }

    public function logout()
        {
            Auth::logout();

            return redirect()->route('home');
        }

}
