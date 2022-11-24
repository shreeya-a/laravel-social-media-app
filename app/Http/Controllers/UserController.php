<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
// Middleware of authentication checks ki user logged in cha ki nai before redirecting to dashboard

    public function registerUser(Request $req)
    {
        // dd=dump and die
        // dd($req->all());

          $req->validate([
            'name' =>'required',
            'email' =>'required|email|unique:users',
            'password' =>'required|min:8',
            're-password' =>'required|same:password',

        ]);

        //data liney ra save garne sangai garcha 
        User::create([
            'name' =>$req->name,
            'email' =>$req->email,
            'password' =>Hash::make($req->password),
        ]);
        // return redirect('/login');
        return redirect()->route('login');

    }

    public function loginUser(Request $req)
    {
        // dd=dump and die
        // attempt() le sabb data lagcha aafai hash i.e encrypt garera lagcha login 
        //user login cha chaina, validate cha ki chaina yeta uti sabb check garcha
        // dd($req->all());

        $req->validate([
            'email' =>'required|email',
            'password' =>'required',
            'confirm-password' =>'required|same:password',
        ]);

        // only() le jun data chahiyeko tyo matra data liyera aau 
        // all() le sabb data lyaucha
        // default wala user delete gareko bhayera we have to change in config bhitra ko auth.php
      if(Auth::attempt($req->only(['email', 'password'])))  
      { 
        // dd('you are Logged In');
        return redirect()->route('dashboard');

      } else{
        // dd('user not found');
        return back()->with('fail','User not found');
      }


    }
    public function logout(){

        // login logout ko lagi remember_token chahincha
        //remember me? wala checkbox in login form ma kaam lagcha remember_token
        auth()->logout();

        return redirect()->route('login');
    }
}
