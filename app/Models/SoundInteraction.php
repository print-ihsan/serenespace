<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoundInteraction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'soundscape_type',
        'volume_level',
        'duration_seconds',
        'interaction_data'
    ];

    protected $casts = [
        'interaction_data' => 'array'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}