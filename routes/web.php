<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
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

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');


Route::get('/beranda', [UserController::class, 'beranda'])->name('beranda');

Route::get('/data_peserta', [PageController::class, 'data_peserta'])->name('pendaftar');


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

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/departemen', function () {
    return view('departemen',[
        "title" => "Departemen"
    ]);
});
