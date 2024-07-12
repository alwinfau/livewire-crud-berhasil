<?php

namespace App\Livewire\Student;

use App\Models\students;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Editstudent extends Component
{

    #[Validate('required|min:3')]
    public $npm = '';

    #[Validate('required|min:3')]
    public $name = '';
    public $id;

    public function mount($id){
        if ($id) {
            $items = students::find($id);
            $this->id = $items->id;
            $this->npm = $items->npm;
            $this->name = $items->name;
        }
    }


    public function update(){
        $this->validate();

        $items = students::find($this->id);
        $items->update([
            'npm' => $this->npm,
            'name' => $this->name,
        ]);

        return redirect()->to('/');
    }

    public function render()
    {
        return view('livewire.student.editstudent');
    }
}
