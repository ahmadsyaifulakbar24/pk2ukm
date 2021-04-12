<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'provinces';
    protected $fillable = [
        'id',
        'province'
    ];
    
    use HasFactory;

    public function  training()
    {
        return $this->hasMany(Training::class, 'province_id');
    }
}
