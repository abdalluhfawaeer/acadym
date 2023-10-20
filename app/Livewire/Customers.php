<?php

namespace App\Livewire;

use App\Models\Clint;
use App\Models\Clintcu;
use Livewire\Component;

class Customers extends Component
{
    public $title = [];
    public $clint = [];

    public function render()
    {
        return view('livewire.customers');
    }

    public function mount() {
        $this->title = Clintcu::first();
        $this->clint = Clint::get();
    }
}
