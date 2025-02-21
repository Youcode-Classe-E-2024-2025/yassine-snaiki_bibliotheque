<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
    
        try {
            $user = User::create([
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role' => 'user',
            ]);
    
            // Log the user in
            Auth::login($user);
    
            // Regenerate session
            $request->session()->regenerate();
    
            return redirect()->intended('/'); 
    
        } catch (\Exception $e) {
            return back()->withErrors([
                'error' => 'Registration failed, please try again later.'
            ]);
        }
    }
    
}
