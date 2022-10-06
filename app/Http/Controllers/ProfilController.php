<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function show(User $user)
    {
        return view('user.profilpetani',[
            "title" => $user->name,
            "user" => $user,
            "projects" => $user->project
        ]);
    }

    public function showDashboard(User $user)
    {
        return view('dashboard.myprofile.index',[
            "user" => $user,
            "projects" => $user->project
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