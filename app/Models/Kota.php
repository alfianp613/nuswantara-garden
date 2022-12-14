<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    use HasFactory;

    protected $fillable = [
        "id","kode_propinsi","nama_kota"
    ];

    public function kota()
    {
        return $this->belongsTo(Propinsi::class);
    }

    public function petani()
    {
        return $this->belongsTo(Petani::class,'id');
    }
}