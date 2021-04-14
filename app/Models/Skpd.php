<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skpd extends Model
{
    protected $table = 'skpds';
    protected $fillable = [
        'user_id',
        'name_dinas',
        'nip_dinas',
        'phone_number_dinas',
        'name_responsible_person', 
        'phone_number_responsible_person', 
    ];
    
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
