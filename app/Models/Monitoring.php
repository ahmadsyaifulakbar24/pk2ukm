<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monitoring extends Model
{
    use HasFactory;

    protected $table = 'monitorings';
    protected $fillable = [
        'participant_id',
        'm1',
        'm2_id',
        'm3',
    ];

    public function participant()
    {
        return $this->belongsTo(Participant::class, 'participant_id');
    }

    public function m2()
    {
        return $this->belongsTo(Param::class, 'm2_id');
    }
}
