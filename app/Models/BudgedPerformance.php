<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BudgedPerformance extends Model
{
    use HasFactory;

    protected $table = 'budged_performances';
    protected $fillable = [
        'user_id',
        'budged',
        'budged_realization1',
        'document_budged_realization1',
        'budged_realization2',
        'document_budged_realization2',
        'target_participant',
        'target_companion',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
