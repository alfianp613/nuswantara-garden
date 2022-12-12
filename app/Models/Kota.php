<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    use HasFactory;

    public function kota()
    {
        return $this->belongsTo(Propinsi::class,'id');
    }

    public function kotaable()
    {
        return $this->morphTo();
    }
}