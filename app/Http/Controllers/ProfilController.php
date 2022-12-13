<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfilController extends Controller
{
    public function show(User $user)
    {
        $komoditas = DB::table('komoditas')->where('kode_komoditas',"=" ,$user->petani->kode_komoditas)->get();
        $propinsi = DB::table('propinsis')->where('id',"=" ,$user->petani->kode_propinsi)->get();
        $kota = DB::table('kotas')->where('id',"=" ,$user->petani->kode_kota)->get();
        return view('user.profilpetani',[
            "title" => $user->name,
            "user" => $user,
            "projects" => $user->project,
            "komoditas" => $komoditas,
            "propinsi" => $propinsi,
            "kota" => $kota
        ]);
    }

    public function showDashboard(User $user)
    {
        $komoditas = DB::table('komoditas')->where('kode_komoditas',"=" ,$user->petani->kode_komoditas)->get();
        $propinsi = DB::table('propinsis')->where('id',"=" ,$user->petani->kode_propinsi)->get();
        $kota = DB::table('kotas')->where('id',"=" ,$user->petani->kode_kota)->get();

        return view('dashboard.myprofile.index',[
            "user" => $user,
            "projects" => $user->project,
            "komoditas" => $komoditas,
            "propinsi" => $propinsi,
            "kota" => $kota
        ]);
    }

    public function showUser(User $user)
    {
        return view('user.profiluser',[
            "title" => $user->name,
            "user" => $user,
        ]);
    }
}