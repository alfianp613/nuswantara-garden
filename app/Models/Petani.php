<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petani extends Model
{
    use HasFactory;

    protected $guarded = ['created_at','updated_at'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function pencairan()
    {
        return $this->hasMany(Pencairan::class,'petaniid');
    }

    public function propinsi()
    {
        return $this->hasOne(Propinsi::class,'id');
    }

    public function kota()
    {
        return $this->hasOne(Kota::class,'id');
    }

    public function komoditas()
    {
        return $this->hasOne(Komoditas::class,'kode_komoditas');
    }
}