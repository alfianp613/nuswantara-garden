<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pencairan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function petani()
    {
        return $this->belongsTo(Petani::class,'petaniid');
    } 

    public function project()
    {
        return $this->belongsTo(Project::class,'projectid');
    } 
}