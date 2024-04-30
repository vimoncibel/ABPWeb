<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('LandingPage');
});

Route::get('/SignUp', function () {
    return view('SignUp');
});

Route::get('/Login', function () {
    return view('Login');
});

Route::get('/Home', function () {
    return view('Home');
});

Route::get('/Recipes', function () {
    return view('Recipes');
});



