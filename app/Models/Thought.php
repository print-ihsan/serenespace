<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thought extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'content',
        'mood',
        'is_auto_delete',
        'auto_delete_at'
    ];

    protected $casts = [
        'auto_delete_at' => 'datetime',
        'is_auto_delete' => 'boolean'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}