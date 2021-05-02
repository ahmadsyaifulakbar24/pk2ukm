<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companion extends Model
{
    use HasFactory;

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

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function parent_user() 
    {
        return $this->belongsTo(User::class, 'parent_user_id');
    }

    public function  religion()
    {
        return $this->belongsTo(Param::class, 'religion_id');
    }

    public function  education()
    {
        return $this->belongsTo(Param::class, 'education_id');
    }

    public function districts_city()
    {
        return $this->belongsTo(DistrictsCity::class, 'districts_city_id');
    }
}
