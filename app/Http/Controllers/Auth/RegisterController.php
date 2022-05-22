<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register',[
            "title" => "Register"
        ]);
    }

    public function store()
    {
        return request()->all();
    } 
}