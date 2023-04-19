<?php

namespace App\Http\Livewire;

use Livewire\Component;

class GroupIndex extends Component
{
    public $showingPostModal = false;
    public $isEditMode = false;
    // public $deleteMode = false;

    public function showPostModal()
    {
        $this->reset();
        $this->showingPostModal = true;
    }
    public function isEditMode()
    { 
        $this->reset();
        $this->isEditMode = true;  
    }
    public function deleteMode()
    { 
        // $this->deleteMode = true;
    }
    
    public function render()
    {
        return view('livewire.group-index');
    }
}
