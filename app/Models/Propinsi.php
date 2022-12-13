<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propinsi extends Model
{
    use HasFactory;

    protected $fillable = [
        "id","nama_propinsi"
    ];

    public function kota()
    {
        return $this->hasMany(Kota::class,'kode_propinsi');
    }

    public function petani()
    {
        return $this->belongsTo(Petani::class,'kode_propinsi');
    }
}