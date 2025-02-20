<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);         

      if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        if (Auth::user()->role === 'admin') {
            return redirect()->intended('/dashboard'); 
        }
        return redirect()->intended('/'); 
    }
    }
    

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
