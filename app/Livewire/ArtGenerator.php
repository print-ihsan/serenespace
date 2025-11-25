<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ArtSession;
use Illuminate\Support\Facades\Auth;

class ArtGenerator extends Component
{
    public $artType = 'abstract';
    public $complexity = 5;
    public $colorScheme = 'pastel';
    public $mood = 'calm';
    public $artSessions;

    public $generatedArt = null;
    public $isGenerating = false;

    public function mount()
    {
        $this->loadArtSessions();
    }

    public function loadArtSessions()
    {
        $this->artSessions = ArtSession::where('user_id', Auth::id())
            ->latest()
            ->get();
    }

    public function generateArt()
    {
        $this->isGenerating = true;
        
        // Simulate art generation process
        $this->dispatch('start-art-generation');
        
        // Delay to show loading state
        usleep(1500000); // 1.5 seconds delay
        
        $parameters = [
            'complexity' => $this->complexity,
            'color_scheme' => $this->colorScheme,
            'mood' => $this->mood,
            'generated_at' => now()->toISOString()
        ];

        // Generate unique art based on parameters
        $this->generatedArt = $this->createArtImage($parameters);

        ArtSession::create([
            'user_id' => Auth::id(),
            'art_type' => $this->artType,
            'parameters' => $parameters,
            'output_url' => $this->generatedArt
        ]);

        $this->isGenerating = false;
        $this->loadArtSessions();
        
        session()->flash('message', 'New art piece generated! 🎨');
    }

    private function createArtImage($parameters)
    {
        // Create unique art based on parameters
        $seed = crc32(serialize($parameters) . time());
        $width = 400;
        $height = 300;
        
        // Use Lorem Picsum with seed for consistent but unique images
        return "https://picsum.photos/seed/{$seed}/{$width}/{$height}";
    }

    public function getColorSchemesProperty()
    {
        return [
            'pastel' => ['#FFB6C1', '#87CEEB', '#98FB98', '#DDA0DD', '#F0E68C'],
            'vibrant' => ['#FF6B6B', '#4ECDC4', '#45B7D1', '#96CEB4', '#FFEAA7'],
            'earth' => ['#8B4513', '#A0522D', '#CD853F', '#D2B48C', '#F5DEB3'],
            'ocean' => ['#1E90FF', '#00BFFF', '#87CEEB', '#AFEEEE', '#B0E0E6'],
            'forest' => ['#228B22', '#32CD32', '#90EE90', '#006400', '#8FBC8F'],
        ];
    }

    public function getMoodThemesProperty()
    {
        return [
            'calm' => 'Calm and Serene',
            'energetic' => 'Energetic and Bold',
            'dreamy' => 'Dreamy and Mystical',
            'minimal' => 'Minimal and Clean',
        ];
    }

    public function toggleFavorite($id)
    {
        $artSession = ArtSession::where('id', $id)->where('user_id', Auth::id())->first();
        if ($artSession) {
            $artSession->update(['is_favorite' => !$artSession->is_favorite]);
            $this->loadArtSessions();
        }
    }

    public function render()
    {
        return view('livewire.art-generator', [
            'colorSchemes' => $this->colorSchemes,
            'moodThemes' => $this->moodThemes,
        ]);
    }
}