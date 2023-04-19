<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TeacherVirtualIndex extends Component
{
    public $composeMessage = false;
    public $showingPostModal = false;
    
    public function composeMessage()
    {
        $this->reset();
        $this->composeMessage = true;
    }
    public function showingPostModal()
    {
        $this->reset();
        $this->showingPostModal = true;
    }
    public function render()
    {
        return view('livewire.teacher-virtual-index');
    }
}
