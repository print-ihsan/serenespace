<?php

namespace App\Livewire;

use Livewire\Component;

class SoundscapePlayer extends Component
{
    public $isPlaying = false;
    public $currentSound = null;
    public $sleepTimer = 30;
    public $volume = 80;

    public $soundscapes = [
        [
            'id' => 'mountainStream',
            'title' => 'Mountain Stream',
            'description' => 'Gentle flowing water with birds in the distance',
            'duration' => '5.5 min',
            'likes' => '1.3k',
            'image' => 'https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80'
        ],
        [
            'id' => 'oceanWaves',
            'title' => 'Ocean Waves', 
            'description' => 'Calming waves crashing on the shore',
            'duration' => '60 min',
            'likes' => '2.4k',
            'image' => 'https://images.unsplash.com/photo-1518837695005-2083093ee35b?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80'
        ],
        [
            'id' => 'deepForest',
            'title' => 'Deep Forest',
            'description' => 'Birds chirping and leaves rustling',
            'duration' => '30 min', 
            'likes' => '1.8k',
            'image' => 'https://images.unsplash.com/photo-1448375240586-882707db888b?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80'
        ],
        [
            'id' => 'gentleRain',
            'title' => 'Gentle Rain',
            'description' => 'Soft rainfall on a rooftop',
            'duration' => '5.6 min',
            'likes' => '3.1k',
            'image' => 'https://images.unsplash.com/photo-1515694346937-94d85e41e6f0?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80'
        ]
    ];

    public function playSound($soundId)
    {
        if ($this->currentSound === $soundId && $this->isPlaying) {
            $this->isPlaying = false;
        } else {
            $this->currentSound = $soundId;
            $this->isPlaying = true;
        }
    }

    public function setTimer($minutes)
    {
        $this->sleepTimer = $minutes;
    }

    public function togglePlay()
    {
        $this->isPlaying = !$this->isPlaying;
    }

    public function render()
    {
        return view('livewire.soundscape-player');
    }
}