<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Thought;
use Illuminate\Support\Facades\Auth;

class ThoughtDump extends Component
{
    public $content = '';
    public $mood = 'neutral';
    public $isAutoDelete = true;
    public $thoughts;

    protected $rules = [
        'content' => 'required|min:1|max:1000',
        'mood' => 'required|in:happy,sad,neutral,anxious,peaceful,excited'
    ];

    public function mount()
    {
        $this->loadThoughts();
    }

    public function loadThoughts()
    {
        $this->thoughts = Thought::where('user_id', Auth::id())
            ->latest()
            ->get();
    }

    public function saveThought()
    {
        $this->validate();

        Thought::create([
            'user_id' => Auth::id(),
            'content' => $this->content,
            'mood' => $this->mood,
            'is_auto_delete' => $this->isAutoDelete,
            'auto_delete_at' => $this->isAutoDelete ? now()->addHours(24) : null
        ]);

        $this->content = '';
        $this->mood = 'neutral';
        $this->loadThoughts();
        
        session()->flash('message', 'Thought saved successfully!');
    }

    public function deleteThought($id)
    {
        Thought::where('id', $id)->where('user_id', Auth::id())->delete();
        $this->loadThoughts();
    }

    public function render()
    {
        return view('livewire.thought-dump');
    }
}