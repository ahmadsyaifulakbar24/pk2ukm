<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DistrictsCity extends Model
{
    protected $table = ['districts_cities'];
    protected $fillable = [
        'province_id',
        'districts_city',
        'type',
        'state_capital',
    ];

    use HasFactory;
}
