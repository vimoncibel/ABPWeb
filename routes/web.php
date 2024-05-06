<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['auth'])->group(function () {
    Route::get('/Home', function () {
        return view('Home');
    });

    Route::get('/Recipes', function () {
        return view('Recipes');
    });

    Route::get('/Profil', function () {
        return view('Profil');
    });

    Route::get('/EditProfile', function () {
        return view('EditProfile');
    });

    Route::get('/MyRecipe', function () {
        return view('MyRecipe');
    });

    Route::get('/logout', function () {
        Auth::logout();
        return redirect('login');
    });
});

Route::get('/', function () {
    return view('LandingPage');
});

Route::get('/SignUp', function () {
    return view('SignUp');
});

Route::get('/Login', function () {
    return view('Login');
});

Route::get('/login', function () {
    // Check if user is already authenticated
    if (Auth::check()) {
        return redirect('/Home');
    }
    return view('login');
})->name('login');

Route::post('/login', function (Request $request) {
    $credentials = $request->only('email', 'password');

    // Cek apakah email dan password cocok dengan data di database
    if (Auth::attempt($credentials)) {
        // Autentikasi berhasil, arahkan ke halaman produk
        return redirect('/Home');
    } else {
        // Autentikasi gagal, kembali ke halaman login dengan pesan error
        return redirect('/login')->with('error', 'Email atau password salah');
    }
})->name('login.submit');

