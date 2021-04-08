<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Param extends Model
{
    protected $table = 'params';
    protected $fillable = [
        'parent_id',
        'category_param',
        'param',
        'active', 
        'order',
    ];

    use HasFactory;
}
