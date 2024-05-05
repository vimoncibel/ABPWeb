<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
}
