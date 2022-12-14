<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Project extends Model
{
    use HasFactory,Sluggable;
    
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(Petani::class);
    } 

    public function payment()
    {
        return $this->hasMany(Payment::class);
    }

    public function pencairan()
    {
        return $this->hasMany(Pencairan::class);
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}