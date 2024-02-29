<?php

// app/Http/Livewire/AddStudentForm.php

namespace App\Http\Livewire;

use Livewire\Component;

class AddStudentForm extends Component
{
    public $name;
    public $address;
    public $age;

    public function render()
    {
        return view('livewire.add-student-form');
    }

    public function submitForm()
    {
        $this->validate([
            'name' => 'required',
            'address' => 'required',
            'age' => 'required|numeric'
        ]);

        // Your logic to save the student here
        // E.g., Student::create([...]);

        session()->flash('success', 'Student created successfully');

        $this->reset(); // Clear input fields after successful submission
    }
}
