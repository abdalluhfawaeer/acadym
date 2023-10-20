<?php

namespace App\Livewire;

use Livewire\Component;

class About extends Component
{
    public $about = [];
    public function render()
    {
        return view('livewire.about');
    }

    public function mount() {
        $this->about = \App\Models\About::first();
    }
}
