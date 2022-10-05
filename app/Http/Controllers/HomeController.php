<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\User;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index(User $user, Payment $payment)
    {
        return view('user.index',[
            "title" => "Home",
            "projects"=> auth()->user()->payment->unique('projectid'),
            "nominal" => auth()->user()->payment->groupby('projectid')->map(function ($row) {return $row->sum('nominal');})
        ]);
    }
    public function indexPetani()
    {
        return view('petani.homepetani',[
            "title" => "Home"
        ]);
    }
    
    
}