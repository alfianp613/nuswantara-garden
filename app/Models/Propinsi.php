<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propinsi extends Model
{
    use HasFactory;

    public function kota()
    {
        return $this->hasMany(Kota::class,'kode_propinsi');
    }

    public function propinsiable()
    {
        return $this->morphTo();
    }
}