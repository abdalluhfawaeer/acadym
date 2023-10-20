<?php

namespace App\Livewire;

use App\Models\Course;
use App\Models\CoursesCu;
use Livewire\Component;

class Coures extends Component
{
    public $title = [];
    public $course = [];

    public function render()
    {
        return view('livewire.coures');
    }

    public function mount() {
        $this->title = CoursesCu::first();
        $this->course = Course::get();
    }
}
