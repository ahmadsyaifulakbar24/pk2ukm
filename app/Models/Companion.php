<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companion extends Model
{
    protected $table = 'companions';
    protected $fillable = [
        'parent_user_id',
        'user_id',
        'no_ktp',
        'status',
        'gender',
        'place_birth',
        'date_birth',
        'religion_id',
        'education_id',
        'home_address',
        'districts_city_id',
        'phone_number',
        'email',
    ];
    
    use HasFactory;
}
