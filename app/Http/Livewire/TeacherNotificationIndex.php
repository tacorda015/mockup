<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TeacherNotificationIndex extends Component
{
    public $showingPostModal = false;
    public $composeMessage = false;

    public function showPostModal()
    {
        $this->reset();
        $this->showingPostModal = true;
    }

    public function composeMessage()
    {
        $this->reset();
        $this->composeMessage = true;
    }
    
    public function render()
    {
        return view('livewire.teacher-notification-index');
    }
}
