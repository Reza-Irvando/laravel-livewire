<?php

namespace App\Http\Livewire;

use App\Models\Note;
use Livewire\Component;

class NoteIndex extends Component
{
    public $notes;
    public function render()
    {
        $this->notes = Note::latest()->get();
        return view('livewire.note-index');
    }
}
