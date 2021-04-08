<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    protected $table = 'trainings';
    protected $fillable = [
        'user_id',
        'training_type_id', 
        'training_title',
        'start_date', 
        'finish_date',
        'place',
        'province_id',
        'districts_city_id',
    ];

    use HasFactory;
}
