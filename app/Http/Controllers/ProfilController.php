<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function show(User $user)
    {
        return view('profildummy',[
            "title" => $user->name,
            "user" => $user,
            "projects" => $user->project
        ]);
    }
}