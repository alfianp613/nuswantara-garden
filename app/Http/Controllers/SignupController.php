<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function index()
    {
        return view('user.signupuser',[
            "title" => "User Sign Up"
        ]);
    }

    public function signup(Request $request)
    {
        $validated = $request-> validate([
            'email' => 'required|email:dns|unique:users',
            'nama' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'tanggal_lahir' => 'required',
            'no_telepon' => 'required|max:20',
            'password' => 'required|min:8|max:20'
        ]);
        
        $validated['roleid'] = 1;
        $validated['password'] = Hash::make($validated['password']);
        
        User::create($validated);

        $request->session()->flash('success','Registrasi berhasil, silahkan login :D');
        return redirect("/login-user");
    }
}