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
        return $this->belongsTo(User::class);
    }

    public function project()
    {
        return $this->hasMany(Project::class);
    }

    public function pencairan()
    {
        return $this->hasMany(Pencairan::class);
    }

    public function propinsi()
    {
        return $this->hasOne(Propinsi::class,'kode_propinsi');
    }

    public function kota()
    {
        return $this->hasOne(Kota::class,'id');
    }

    public function komoditas()
    {
        return $this->hasOne(Komoditas::class,"kode_komoditas");
    }
}