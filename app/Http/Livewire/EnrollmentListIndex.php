<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EnrollmentListIndex extends Component
{
    public $editStudent = false;
    public $viewStudent = false;

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
        return view('livewire.enrollment-list-index');
    }
}
