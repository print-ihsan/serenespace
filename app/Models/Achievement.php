<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'icon_url',
        'criteria_type',
        'criteria_threshold'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_achievements')
                    ->withTimestamps()
                    ->withPivot('unlocked_at');
    }
}