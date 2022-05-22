<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register',[
            "title" => "Register"
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request-> validate([
            'name' => ['required', 'string', 'max:255'],
            'nim'=> ['required', 'string','max:20','unique:posts'],
            'email'=> ['required', 'string','max:255','unique:posts'],
            'departemen1'=>['required', 'string','max:255'],
            'alasan1'=>['required', 'string','max:255'],
            'departemen2'=>['required', 'string','max:255'],
            'alasan2'=>['required', 'string','max:255']
        ]);
        post::create ($validatedData);
    } 
}