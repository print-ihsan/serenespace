<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Achievement;

class AchievementsSeeder extends Seeder
{
    public function run()
    {
        $achievements = [
            [
                'name' => 'First Thought',
                'description' => 'Record your first thought',
                'icon_url' => 'https://assets1.lottiefiles.com/packages/lf20_wnynzqbb.json',
                'criteria_type' => 'thoughts_count',
                'criteria_threshold' => 1
            ],
            [
                'name' => 'Mindful Beginner',
                'description' => 'Complete your first mindfulness session',
                'icon_url' => 'https://assets1.lottiefiles.com/packages/lf20_wnynzqbb.json',
                'criteria_type' => 'sessions_count',
                'criteria_threshold' => 1
            ],
            [
                'name' => 'Creative Soul',
                'description' => 'Generate your first art piece',
                'icon_url' => 'https://assets1.lottiefiles.com/packages/lf20_wnynzqbb.json',
                'criteria_type' => 'art_count',
                'criteria_threshold' => 1
            ],
        ];

        foreach ($achievements as $achievement) {
            Achievement::create($achievement);
        }
    }
}