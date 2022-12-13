<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komoditas extends Model
{
    use HasFactory;

    public function petani()
    {
        return $this->belongsTo(Petani::class,'kode_komoditas');
    }

    protected $fillable = [
        "nama_komoditas"
    ];
}