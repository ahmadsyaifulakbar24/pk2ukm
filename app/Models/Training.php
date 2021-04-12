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

    public function user() 
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function  training_type()
    {
        return $this->belongsTo(Param::class, 'training_type_id');
    }

    public function province()
    {
        return $this->belongsTo(Province::class, 'province_id');      
    }

    public function districts_city()
    {
        return $this->belongsTo(DistrictsCity::class, 'districts_city_id');
    }
}
