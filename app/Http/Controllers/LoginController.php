<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{
    public function index()
    {
        return view('login',[
            "title" => "Login Page"
        ]);
    }

    public function PostLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($request->only('email','password'))){
            $akun = DB::table('users')->where('email', $request->email)->first();
            //dd($akun);
            if($akun->role =='Petani'){
                Auth::guard('petani')->LoginUsingId($akun->id);
                return redirect('/dashboard')->with('sukses','Anda Berhasil Login');
            } else if($akun->role =='User'){
                Auth::guard('user')->LoginUsingId($akun->id);
                return redirect('/home')->with('sukses','Anda Berhasil Login');
            }
        }
        return redirect("login")->with('loginError','Login Gagal!');
    }
    public function logout()
    {
        Auth::logout();
    
        request()->session()->invalidate();
    
        request()->session()->regenerateToken();
    
        return redirect('/login');
    }
}