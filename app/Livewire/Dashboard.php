<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Thought;
use App\Models\MindfulnessSession;
use App\Models\ArtSession;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Component
{
    public $recentThoughts;
    public $recentSessions;
    public $recentArt;

    public function mount()
    {
        $user = Auth::user();
        $this->recentThoughts = Thought::where('user_id', $user->id)
            ->latest()
            ->take(3)
            ->get();
        
        $this->recentSessions = MindfulnessSession::where('user_id', $user->id)
            ->latest()
            ->take(3)
            ->get();
            
        $this->recentArt = ArtSession::where('user_id', $user->id)
            ->latest()
            ->take(3)
            ->get();
    }

    public function render()
    {
        return view('livewire.dashboard');
        // HAPUS ->layout() agar tidak double navbar
    }
}