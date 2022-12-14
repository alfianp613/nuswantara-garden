<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryDashboard extends Controller
{
    public function test()
    {
        $u = DB::select(DB::raw('select count(id) as jumlah_user from users where role=\'User\''));
        $p = DB::select(DB::raw('select count(id) as jumlah_petani from users where role=\'Petani\''));
        $pr = DB::select(DB::raw('select count(id) as jumlah_project from projects'));
        $tr = DB::select(DB::raw('select sum(nominal) as total_nominal from payments'));
        $te = DB::connection('mysql2')->select(DB::raw('select sum(nominal) as total_nominal from fact_payment where sk_petani=158'));
        $line = DB::connection('mysql2')->select(DB::raw('SELECT tanggal, nominal FROM fact_payment INNER JOIN dim_waktu ON fact_payment.sk_waktu = dim_waktu.sk_waktu;'));
        $tanggal = array();
        foreach($line as $data){
            array_push($tanggal,$data->tanggal);
        }
        $nominal = array();
        foreach($line as $data){
            array_push($nominal,$data->nominal);
        }
        return view('test',[
            'user'=>$u[0],
            'petani'=>$p[0],
            'project'=>$pr[0],
            'transaksi'=>$tr[0],
            'a'=>$te[0],
            'tanggal'=>$tanggal,
            'nominal'=>$nominal
        ]);
    }
}