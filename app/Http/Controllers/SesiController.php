<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    function index(){
        return view('login');
    }

    function login(Request $request){
        $request->validate([
            'email'=> 'required',
            'password'=> 'required',
        ], [
            'email.required'=>'isi email dulu bang',
            'password.required'=>'isi password dulu bang',
        ]);

        $infologin = [
            'email'=>$request->email,
            'password'=>$request->password,
        ];

        if(Auth::attempt($infologin)){
            if(Auth::user()->role == 'admin'){
                return redirect('/admin');
            } else if (Auth::user()->role=='user'){
                return redirect('/admin/baca');
            }
        } else {
            return redirect('/login')->withErrors("Gagal Login")->withInput();
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

}
