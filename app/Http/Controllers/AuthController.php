<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;


class AuthController extends Controller
{
    //
    public function auth(Request $req) {
        $email = $req->input('email');
        $password = $req->input('password');

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect('/Home');
        }
        return redirect('login')->with('msg', 'Email / password salah');
    }

    public function register(Request $request)
    {
        // Validate the user input
        $request->validate([
            'email' => 'required|email|unique:users',
            'username' => 'required|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        // Create a new user record
        $user = new User();
        $user->email = $request->email;
        $user->username = $request->username;
        $user->password = Hash::make($request->password); // Enkripsi password sebelum disimpan
        $user->save();

        // Redirect the user after registration
        return redirect()->route('login')->with('success', 'Registration successful! Please login.');
    }
}
