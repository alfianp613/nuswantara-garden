<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryDashboard extends Controller
{
    public function dashboard()
    {
        $u = DB::select(DB::raw('select count(id) as jumlah_user from users where role=\'User\''));
        $p = DB::select(DB::raw('select count(id) as jumlah_petani from users where role=\'Petani\''));
        $pr = DB::select(DB::raw('select count(id) as jumlah_project from projects'));
        $tr = DB::select(DB::raw('select sum(nominal) as total_nominal from payments'));
        $te = DB::connection('mysql2')->select(DB::raw('select sum(nominal) as total_nominal from fact_payment where sk_petani=158'));
        $line1 = DB::connection('mysql2')->select(DB::raw('SELECT DATE_FORMAT(tanggal, \'%Y-%m\') AS yearmonth, SUM(nominal) as total_nominal FROM fact_payment INNER JOIN dim_waktu
                                                          ON fact_payment.sk_waktu = dim_waktu.sk_waktu GROUP BY yearmonth;'));
        $tanggal1 = array();
        foreach($line1 as $data){
            array_push($tanggal1,$data->yearmonth);
        }
        $nominal1 = array();
        foreach($line1 as $data){
            array_push($nominal1,$data->total_nominal);
        }

        $line2 = DB::connection('mysql2')->select(DB::raw('SELECT DATE_FORMAT(tanggal, \'%Y-%m\') AS yearmonth, SUM(nominal) as total_nominal FROM fact_pencairan INNER JOIN dim_waktu
                                                          ON fact_pencairan.sk_waktu = dim_waktu.sk_waktu GROUP BY yearmonth;'));
        $tanggal2 = array();
        foreach($line2 as $data){
            array_push($tanggal2,$data->yearmonth);
        }
        $nominal2 = array();
        foreach($line2 as $data){
            array_push($nominal2,$data->total_nominal);
        }

        $line3 = DB::connection('mysql2')->select(DB::raw('SELECT DATE_FORMAT(tanggal_project_dimulai, \'%Y-%m\') AS yearmonth, SUM(target_pendanaan) as total_target FROM dim_project GROUP BY yearmonth;'));
        $tanggal3 = array();
        foreach($line3 as $data){
        array_push($tanggal3,$data->yearmonth);
        }
        $nominal3 = array();
        foreach($line3 as $data){
        array_push($nominal3,$data->total_target);
        }

        $top5user = DB::connection('mysql2')->select(
            DB::raw('SELECT nama_donatur, sum(nominal) as total_donasi, count(nominal) as frekuensi
            FROM fact_payment 
            INNER JOIN dim_donatur
            ON fact_payment.sk_donatur = dim_donatur.sk_donatur
            GROUP BY nama_donatur
            ORDER BY total_donasi DESC
            LIMIT 5;'));
        $top5active = DB::connection('mysql2')->select(
            DB::raw('SELECT nama_donatur, sum(nominal) as total_donasi, count(nominal) as frekuensi
            FROM fact_payment 
            INNER JOIN dim_donatur
            ON fact_payment.sk_donatur = dim_donatur.sk_donatur
            GROUP BY nama_donatur
            ORDER BY frekuensi DESC
            LIMIT 5;'));

        $doneproject = DB::connection('mysql2')->select(
            DB::raw('SELECT nama_project, dana_terkumpul,(dana_terkumpul/target_pendanaan) as persentase, status_project
            FROM dim_project
            WHERE status_project=\'Selesai\'
            ORDER BY persentase DESC
            LIMIT 5;'));

        $projectbottom = 
        DB::connection('mysql2')->select(
            DB::raw('SELECT nama_project, dana_terkumpul, ((dana_terkumpul/target_pendanaan)) as persentase, status_project
            FROM dim_project
            ORDER BY persentase
            LIMIT 5;'));
        $bar1 = DB::connection('mysql2')->select(DB::raw('SELECT nama_propinsi, sum(nominal) as total_donasi
        FROM fact_payment
        INNER JOIN dim_petani
        ON fact_payment.sk_petani = dim_petani.sk_petani
        GROUP BY nama_propinsi
        ORDER BY total_donasi DESC
        LIMIT 5;'));
        $prov = array();
        foreach($bar1 as $data){
        array_push($prov,$data->nama_propinsi);
        }
        $total = array();
        foreach($bar1 as $data){
        array_push($total,$data->total_donasi);
        }
        $bar2 = DB::connection('mysql2')->select(DB::raw('SELECT nama_propinsi, COUNT(nominal) as total_transaksi
        FROM fact_payment
        INNER JOIN dim_petani
        ON fact_payment.sk_petani = dim_petani.sk_petani
        GROUP BY nama_propinsi
        ORDER BY total_transaksi DESC
        LIMIT 5;'));
        $prov2 = array();
        foreach($bar2 as $data){
        array_push($prov2,$data->nama_propinsi);
        }
        $total2 = array();
        foreach($bar2 as $data){
        array_push($total2,$data->total_transaksi);
        }
        $bar3 = DB::connection('mysql2')->select(DB::raw('SELECT nama_komoditas, COUNT(nominal) as total_transaksi
        FROM fact_payment
        INNER JOIN dim_petani
        ON fact_payment.sk_petani = dim_petani.sk_petani
        GROUP BY nama_komoditas
        ORDER BY total_transaksi DESC
        LIMIT 5;'));
        $kom = array();
        foreach($bar3 as $data){
        array_push($kom,$data->nama_komoditas);
        }
        $komt = array();
        foreach($bar3 as $data){
        array_push($komt,$data->total_transaksi);
        }
        $bar4 = DB::connection('mysql2')->select(DB::raw('SELECT nama_komoditas, sum(nominal) as total_donasi
        FROM fact_payment
        INNER JOIN dim_petani
        ON fact_payment.sk_petani = dim_petani.sk_petani
        GROUP BY nama_komoditas
        ORDER BY total_donasi DESC
        LIMIT 5;'));
        $kom2 = array();
        foreach($bar4 as $data){
        array_push($kom2,$data->nama_komoditas);
        }
        $komt2 = array();
        foreach($bar4 as $data){
        array_push($komt2,$data->total_donasi);
        }
        return view('admin.index',[
            'user'=>$u[0],
            'petani'=>$p[0],
            'project'=>$pr[0],
            'transaksi'=>$tr[0],
            'a'=>$te[0],
            'tanggal1'=>$tanggal1,
            'nominal1'=>$nominal1,
            'tanggal2'=>$tanggal2,
            'nominal2'=>$nominal2,
            'tanggal3'=>$tanggal3,
            'nominal3'=>$nominal3,
            'top5user'=>$top5user,
            'top5active'=>$top5active,
            'doneproject'=>$doneproject,
            'projectbottom'=>$projectbottom,
            'prov'=>$prov,
            'total'=>$total,
            'prov2'=>$prov2,
            'total2'=>$total2,
            'kom'=>$kom,
            'komt'=>$komt,
            'kom2'=>$kom2,
            'komt2'=>$komt2
        ]);
    }
}