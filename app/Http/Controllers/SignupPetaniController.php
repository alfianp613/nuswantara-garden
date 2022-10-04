<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Petani;

class SignupPetaniController extends Controller
{
    public function index()
    {
        return view('petani.signuppetani',[
            "title" => "Petani Sign Up"
        ]);
    }
    
    public function signup(Request $request)
    {
        $validated = $request-> validate([
            'email' => 'required|email:dns|unique:petanis',
            'nama' => 'required|max:255',
            'username' => 'required|min:3|max:255|unique:petanis',
            'nik'=>'required|min:16',
            'komoditas'=>'required|max:255',
            'alamat'=>'required|max:255',
            'tanggal_lahir' => 'required',
            'no_telepon' => 'required|max:20',
            'password' => 'required|min:8|max:20'
        ]);
        
        $validated['password'] = Hash::make($validated['password']);
        
       
        Petani::create($validated);

        $request->session()->flash('success','Registrasi berhasil, silahkan login :D');
        return redirect("/login-petani");
    }
}