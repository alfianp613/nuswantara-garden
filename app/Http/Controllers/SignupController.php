<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Petani;
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
            'name' => 'required|max:255',
            'password' => 'required|min:8|max:20',
            'image' => 'image|mimes:jpeg,jpg,png,bmp,gif,svg|file|max:10240',
        ]);
        
        if($request->file('image')){
            $validated['image'] =  $request->file('image')->store('user-images');
        }
        
        $validated['role'] = "User";
        $validated['password'] = Hash::make($validated['password']);
        
        User::create($validated);

        $request->session()->flash('success','Registrasi berhasil, silahkan login :D');
        return redirect("/login");
    }

    public function indexPetani()
    {
        return view('user.signuppetani',[
            "title" => "Petani Sign Up"
        ]);
    }

    public function signupPetani(Request $request)
    {
        $validated = $request-> validate([
            'email' => 'required|email:dns|unique:users',
            'name' => 'required|max:255',
            'password' => 'required|min:8|max:20',
            'nik'=>'required|min:16|unique:petanis',
            'komoditas'=>'required|max:255',
            'alamat'=>'required|max:255',
            'tanggal_lahir' => 'required',
            'image' => 'image|mimes:jpeg,jpg,png,bmp,gif,svg|file|max:10240',
            'no_telepon' => 'required|max:20'
        ]);
        
        if($request->file('image')){
            $validated['image'] =  $request->file('image')->store('user-images');
        }
        
        $validated['role'] = "Petani";
        $validated['password'] = Hash::make($validated['password']);
        
        
        $user = User::create([
            'email'=>$validated['email'],
            'name'=>$validated['name'],
            'role'=>$validated['role'],
            'password'=>$validated['password'],
            'image'=>$validated['image']
        ]);

        Petani::create([
            'id'=>$user->id,
            'nik'=>$validated['nik'],
            'komoditas'=>$validated['komoditas'],
            'alamat'=>$validated['alamat'],
            'tanggal_lahir'=>$validated['tanggal_lahir'],
            'no_telepon'=>$validated['no_telepon']
        ]);

        $request->session()->flash('success','Registrasi berhasil, silahkan login :D');
        return redirect("/login");
    }
}