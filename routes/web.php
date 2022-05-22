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
    return view('welcome',[
        "title" => "Welcome"
    ]);
});

Route::get('/login', function () {
    return view('login',[
        "title" => "Login"
    ]);
});

Route::get('/beranda', function () {
    return view('beranda',[
        "title" => "Beranda"
    ]);
});

Route::get('/data_peserta', function () {
    return view('data_peserta',[
        "title" => "Data_peserta"
    ]);
});

Route::get('/detail', function () {
    return view('detail',[
        "title" => "Detail"
    ]);
});

Route::get('/hapus', function () {
    return view('hapus',[
        "title" => "Hapus"
    ]);
});

Route::get('/register', function () {
    return view('register',[
        "title" => "Register"
    ]);
});

Route::get('/departemen', function () {
    return view('departemen',[
        "title" => "Departemen"
    ]);
});
