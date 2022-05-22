<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * Sebuah Method Controller yang digunakan untuk menampilkan halaman login
     * @return view halaman login yang berisi form login karena routing yang diterima adalah /login
     */
    public function index()
    {
        return view('login',[
            "title" => "Login"
        ]);
    }
    /**
     * Sebuah Method Controller yang digunakan untuk melakukan proses login
     * 
     */
    public function login(Request $request){
       $hasil = DB::table('users')->where('nim', $request->nim)->count();
       $password = DB::table('users')->where('nim', $request->nim)->value('password');
       

       if($hasil == 1){
           if(Hash::check($request->password, $password)){
               // Activate session_start
                session_start();
                // Set session
                $_SESSION['login'] = true;
                $_SESSION['nim'] = $request->nim;
                // id
                $_SESSION['id'] = DB::table('users')->where('nim', $request->nim)->value('id');
                $_SESSION['name'] = DB::table('users')->where('nim', $request->nim)->value('name');
                $_SESSION['email'] = DB::table('users')->where('nim', $request->nim)->value('email');
                $_SESSION['level'] = DB::table('users')->where('nim', $request->nim)->value('level');
                // //dd session nim
                // //dd($_SESSION['id']);
                // dd($_SESSION['id']);
               return redirect('/beranda');
           }
       }else {
           return redirect('/login');
       }


}
}