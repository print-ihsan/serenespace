<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\MindfulnessSession;
use Illuminate\Support\Facades\Auth;

class MindfulnessTracker extends Component
{
    public $duration = 5;
    public $sessionType = 'breathing';
    public $notes = '';
    public $focusScore = 5;
    public $sessions;
    
    // Timer properties
    public $isTimerRunning = false;
    public $timerSeconds = 0;
    public $currentTimerDuration = 0;

    protected $rules = [
        'duration' => 'required|integer|min:1|max:120',
        'sessionType' => 'required|in:breathing,meditation,body_scan,gratitude',
        'focusScore' => 'required|integer|min:1|max:10'
    ];

    public function mount()
    {
        $this->loadSessions();
    }

    public function loadSessions()
    {
        $this->sessions = MindfulnessSession::where('user_id', Auth::id())
            ->latest()
            ->get();
    }

    // Timer functions
    public function startTimer()
    {
        $this->validate(['duration' => 'required|integer|min:1|max:120']);
        
        $this->currentTimerDuration = $this->duration * 60; // Convert to seconds
        $this->timerSeconds = 0;
        $this->isTimerRunning = true;
        
        $this->dispatch('start-timer', duration: $this->currentTimerDuration);
    }

    public function stopTimer()
    {
        $this->isTimerRunning = false;
        $this->saveSession();
    }

    public function updateTimer($seconds)
    {
        $this->timerSeconds = $seconds;
        
        // Auto-save when timer completes
        if ($seconds >= $this->currentTimerDuration) {
            $this->isTimerRunning = false;
            $this->saveSession();
        }
    }

    public function saveSession()
    {
        MindfulnessSession::create([
            'user_id' => Auth::id(),
            'duration_minutes' => $this->duration,
            'session_type' => $this->sessionType,
            'notes' => $this->notes,
            'focus_score' => $this->focusScore
        ]);

        $this->reset(['duration', 'notes', 'focusScore', 'timerSeconds', 'currentTimerDuration']);
        $this->loadSessions();
        
        session()->flash('message', 'Mindfulness session completed! 🧘');
    }

    public function render()
    {
        return view('livewire.mindfulness-tracker');
    }
}