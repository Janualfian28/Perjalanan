<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \App\User;
use \App\models\Warga;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function postlogin(Request $request){
        if(Auth::attempt($request->only('username','password'))){
            return redirect('/dashboard');
        }
            return redirect('/login');
    }

    public function register(){
        return view('auth.register');
    }

    public function postregister(Request $request){

        $user = User::create([
            'nik' => $request->nik ,
            'role' => 'user',
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'remember_token'=>str_random(60)
        ]);

        return redirect('/login');
    }


    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
