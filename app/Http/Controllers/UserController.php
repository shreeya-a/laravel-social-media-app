<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function registerUser(Request $req)
    {
        // dd=dump and die
        // dd($req->all());

          $req->validate([
            'name' =>'required',
            'email' =>'required|unique:users',
            'password' =>'required|',
        ]);

        //data liney ra save garne sangai garcha 
        User::create([
            'name' =>$req->name,
            'email' =>$req->email,
            'password' =>Hash::make($req->password),
        ]);
        return redirect('/login');

    }

    public function loginUser()
    {
        
    }
}
