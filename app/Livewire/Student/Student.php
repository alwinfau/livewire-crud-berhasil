<?php

namespace App\Livewire\Student;

use App\Models\students;
use Livewire\Component;

class Student extends Component
{

    public function destroy($id)
    {
        $item = students::find($id);
        if ($item) {
            $item->delete();
        }
    }

    public function render()
    {
        $datas = students::all();
        return view('livewire.student.student', compact('datas'));
    }
}
