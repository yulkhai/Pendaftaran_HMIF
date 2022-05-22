<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Welcome()
    {
        return view('welcome', [
            "title" => "Welcome"
        ]);
    }
    

    /**
     * Halaman Beranda
     * @return \Illuminate\Http\Response
     */
    public function beranda()
    {
        session_start();
        if (isset($_SESSION['login'])) {
            return view('beranda', [
                "title" => "Beranda"
            ]);
        } else {
            return redirect('/login');
        }
    }

   
}
