<?php

namespace App\Livewire;

use Livewire\Component;

class Story extends Component
{
    public $story = [];

    public function render()
    {
        return view('livewire.story');
    }

    public function mount() {
        $story = \App\Models\Story::first();
        $this->story = $story;
    }
}
