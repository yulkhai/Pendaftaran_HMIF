<?php

namespace App\Http\Controllers\Pages;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
     /**
     * Halaman Profile
     * @return \Illuminate\Http\Response
     */
    public function Profile()
    {
        session_start();
        if (isset($_SESSION['login'])) {
            return view('profile', [
                "title" => "Profile"
            ]);
        } else {
            return redirect('/');
        }
    }
  
    /**
     * Halaman forum setelah login
     * @return \Illuminate\Http\Response
     */
    public function Pendaftar(){
        session_start();
        if (isset($_SESSION['login'])) {
            return view('data_peserta', [
                'post'=> Post::all()
            ]);
        } else {
            return redirect('/');
        }
    }
    

}
