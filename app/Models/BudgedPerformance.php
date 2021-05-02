<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

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

    protected $appends = [
        'document_budged_realization1_url',
        'document_budged_realization2_url'
    ];

    public function getDocumentBudgedRealization1UrlAttribute()
    {
        return ($this->attributes['document_budged_realization1']) ? url('') . Storage::url($this->attributes['document_budged_realization1']) : NULL;
    }

    public function getDocumentBudgedRealization2UrlAttribute()
    {
        return ($this->attributes['document_budged_realization2']) ? url('') . Storage::url($this->attributes['document_budged_realization2']) : NULL;
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
