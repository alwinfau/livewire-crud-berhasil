<?php

namespace App\Livewire\Student;

use App\Models\students;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Addstudent extends Component
{


    #[Validate('required|min:3|max:8')]
    public $npm = '';

    #[Validate('required|min:3')]
    public $name = '';

    public function store(){
        $this->validate();
        students::create([
            'npm' => $this->npm,
            'name' => $this->name,
        ]);
        return redirect()->to('/');
    }

    public function clear(){
        $this->npm ='';
        $this->name ='';
    }

    public function render()
    {
        return view('livewire.student.addstudent');
    }
}
