<?php

namespace App\Livewire\Admin\Components;

use App\Models\Color;
use Livewire\Component;

class Colors extends Component
{
    public $color1 = '';
    public $color2 = '';
    public $color3 = '';
    public $color4 = '';
    public $color5 = '';
    public $id_c = '';

    public function render()
    {
        return view('livewire.admin.components.colors');
    }

    public function mount() {
        $this->query();
    }

    public function save() {
        Color::updateOrCreate([
            'id' => $this->id_c,
        ],[
            'color1' => $this->color1,
            'color2' => $this->color2,
            'color3' => $this->color3,
            'color4' => $this->color4,
            'color5' => $this->color5,
        ]);
        session()->flash('message', 'successfully updated.');
        $this->query();
    }

    public function query() {
        $color = Color::first();
        if ($color) {
            $this->id_c = $color->id;
            $this->color1 = $color->color1;
            $this->color2 = $color->color2;
            $this->color3 = $color->color3;
            $this->color4 = $color->color4;
            $this->color5 = $color->color5;
        }
    }
}
