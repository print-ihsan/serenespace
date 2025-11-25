<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MindfulnessSession extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'duration_minutes',
        'session_type',
        'notes',
        'focus_score'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}