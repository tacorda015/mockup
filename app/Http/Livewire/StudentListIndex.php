<?php

namespace App\Http\Livewire;

use Livewire\Component;

class StudentListIndex extends Component
{
    public $showPostModal = false;
    public $editStudent = false;
    public $viewStudent = false;

    public function showPostModal()
    {
        $this->reset();
        $this->showPostModal = true;
    }
    public function editStudent()
    {
        $this->reset();
        $this->editStudent = true;
    }
    public function viewStudent()
    {
        $this->reset();
        $this->viewStudent = true;
    }
    
    public function render()
    {
        return view('livewire.student-list-index');
    }
}
