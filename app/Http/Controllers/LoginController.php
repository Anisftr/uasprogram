<?php

namespace App\Http\Controllers;

use Illuminate\Support\str;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('login');
        
    }


    public function proses(Request $request){
        if(Auth::attempt($request->only('email', 'password'))){
            return view('welcome');
        }
        
        return \redirect('login');

    }
    
    public function register(){

        return view('register');
    }

    public function registeruser(Request $request){
        //dd($request-> all());
        User::create([
            'name'=>$request-> name,
            'email'=>$request-> email,
            'password'=> bcrypt($request-> password),
            'remember_token'=>str::random(60),
        ]);
        return redirect()->route('login')->with('success','Data Yang Anda Masukkan Berhasil');
    
    }

    public function logout(){
        Auth::logout();
        return \redirect('login');
    }

}
