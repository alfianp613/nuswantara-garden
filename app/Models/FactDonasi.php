<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fact_Penjualan extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $connection = 'mysql2';
    protected $table = 'fact_donasi';
}