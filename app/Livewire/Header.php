<?php

namespace App\Livewire;

use App\Models\Nav;
use Livewire\Component;

class Header extends Component
{
    public $nav = [];
    public $header = [];

    public function render()
    {
        return view('livewire.header');
    }

    public function mount() {
        $this->nav = Nav::first();
        $this->header = \App\Models\Header::first();
    }
}
