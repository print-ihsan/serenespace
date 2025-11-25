<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtSession extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'art_type',
        'parameters',
        'output_url',
        'is_favorite'
    ];

    protected $casts = [
        'parameters' => 'array',
        'is_favorite' => 'boolean'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}