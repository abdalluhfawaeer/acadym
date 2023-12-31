<?php

namespace App\Livewire;

use App\Models\Course;
use App\Models\CoursesCu;
use Livewire\Component;

class Causes extends Component
{
    public $title = [];
    public $course = [];

    public function render()
    {
        return view('livewire.causes');
    }

    public function mount() {
        $this->title = CoursesCu::first();
        $this->course = Course::limit(3)->get();
    }
}
