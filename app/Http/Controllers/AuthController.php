<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public  function login(Request $request){
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt(['username' =>$request->username, 'password' => $request->password])){
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        };

    }

    public  function dashboard(){
        return view('dashboard.index');
    }
}
