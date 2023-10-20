<?php

namespace App\Livewire;

use App\Models\Nav;
use Livewire\Component;

class Footer extends Component
{
    public $nav = [];
    public $header = [];
    public $contact = [];

    public function render()
    {
        return view('livewire.footer');
    }

    public function mount() {
        $this->nav = Nav::first();
        $this->header = \App\Models\Header::first();
        $this->contact = \App\Models\Contact::first();
    }
}
