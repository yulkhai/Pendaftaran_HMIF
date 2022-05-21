<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.welcome',[
        "title" => "Welcome"
    ]);
});

Route::get('/login', function () {
    return view('auth.login',[
        "title" => "Login"
    ]);
});

Route::get('/beranda', function () {
    return view('pages.beranda',[
        "title" => "Beranda"
    ]);
});
