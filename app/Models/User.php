<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function thoughts()
    {
        return $this->hasMany(Thought::class);
    }

    public function mindfulnessSessions()
    {
        return $this->hasMany(MindfulnessSession::class);
    }

    public function artSessions()
    {
        return $this->hasMany(ArtSession::class);
    }

    public function soundInteractions()
    {
        return $this->hasMany(SoundInteraction::class);
    }

    public function achievements()
    {
        return $this->belongsToMany(Achievement::class, 'user_achievements')
                    ->withTimestamps()
                    ->withPivot('unlocked_at');
    }
}