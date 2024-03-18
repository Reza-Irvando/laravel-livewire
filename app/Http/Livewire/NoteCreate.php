<?php

namespace App\Http\Livewire;

use App\Models\Note;
use Livewire\Component;

class NoteCreate extends Component
{
    public $title;
    public $body;
    public $deadline;

    public function render()
    {
        return view('livewire.note-create');
    }

    public function create()
    {
        $notes = Note::create([
            'title' => $this->title,
            'body' => $this->body,
            'deadline' => $this->deadline
        ]);
        $this->resetInput();
        
        // $this->emit('')
    }

    private function resetInput()
    {
        $this->title = null;
        $this->body = null;
        $this->deadline = null;
    }
}