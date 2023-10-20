<?php

namespace App\Livewire;

use App\Models\Nav;
use Livewire\Component;

class Header extends Component
{
    public $nav = [];
    public $header = [];
    public $menu = [];

    public function render()
    {
        return view('livewire.header');
    }

    public function mount() {
        $this->nav = Nav::first();
        $this->header = \App\Models\Header::first();
        if (app()->getLocale() == 'ar') {
            array_push($this->menu ,$this->nav->menu_1_ar);
            array_push($this->menu ,$this->nav->menu_2_ar);
            array_push($this->menu ,$this->nav->menu_3_ar);
            array_push($this->menu ,$this->nav->menu_4_ar);
            array_push($this->menu ,$this->nav->menu_5_ar);
            array_push($this->menu ,$this->nav->menu_6_ar);
        } else {
            array_push($this->menu ,$this->nav->menu_1_en);
            array_push($this->menu ,$this->nav->menu_2_en);
            array_push($this->menu ,$this->nav->menu_3_en);
            array_push($this->menu ,$this->nav->menu_4_en);
            array_push($this->menu ,$this->nav->menu_5_en);
            array_push($this->menu ,$this->nav->menu_6_en);
        }
    }
}
