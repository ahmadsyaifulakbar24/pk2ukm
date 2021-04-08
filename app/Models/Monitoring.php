<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monitoring extends Model
{
    protected $table = 'monitorings';
    protected $fillable = [
        'participant_id',
        'm1',
        'm2_id',
        'm3',
    ];

    use HasFactory;
}
