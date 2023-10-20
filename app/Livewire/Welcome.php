<?php

namespace App\Livewire;

use App\Models\WolcomeHome;
use Livewire\Component;

class Welcome extends Component
{
    public $welcome = [];
    public $title = '';

    public function render()
    {
        return view('livewire.welcome');
    }

    public function mount() {
        $wel = WolcomeHome::first();
        $this->title = app()->getLocale() ? $wel->title_ar_main : $wel->title_en_main;
        for ($i = 1 ; $i <= 4 ; $i++) {
            if (!empty($wel['title_ar'.$i]) && !empty($wel['title_en'.$i])) {
                $this->welcome[] = [
                  'img' => $wel['image'.$i],
                  'title' => app()->getLocale() ? $wel['title_ar'.$i] : $wel['title_en'.$i]
                ];
            }
        }
    }
}
