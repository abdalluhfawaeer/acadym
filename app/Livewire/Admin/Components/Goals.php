<?php

namespace App\Livewire\Admin\Components;

use App\Models\Configuration;
use App\Models\Goal;
use Livewire\Component;

class Goals extends Component
{
    public $title_ar = '';
    public $title_en = '';
    public $desc_ar = '';
    public $desc_en = '';
    public $title_ar1 = '';
    public $title_en1 = '';
    public $desc_ar1 = '';
    public $desc_en1 = '';
    public $title_ar_g = '';
    public $title_en_g = '';
    public $goal_ar_1 = '';
    public $goal_en_1 = '';
    public $goal_ar_2 = '';
    public $goal_en_2 = '';
    public $goal_ar_3 = '';
    public $goal_en_3 = '';
    public $goal_ar_4 = '';
    public $goal_en_4 = '';
    public $goal_ar_5 = '';
    public $goal_en_5 = '';
    public $goal_ar_6 = '';
    public $goal_en_6 = '';
    public $goal_ar_7 = '';
    public $goal_en_7 = '';
    public $id_c = '';
    public $status = true;
    public $id_conf = '';

    public function render()
    {
        return view('livewire.admin.components.goals');
    }

    public function mount() {
        $this->query();
    }

    public function save() {
        Goal::updateOrCreate([
            'id' => $this->id_c,
        ],[
            'title_ar' => $this->title_ar,
            'title_en' => $this->title_en,
            'desc_ar' => $this->desc_ar,
            'desc_en' => $this->desc_en,
            'title_ar1' => $this->title_ar1,
            'title_en1' => $this->title_en1,
            'desc_ar1' => $this->desc_ar1,
            'desc_en1' => $this->desc_en1,
            'title_ar_g' => $this->title_ar_g,
            'title_en_g' => $this->title_en_g,
            'goal_ar_1' => $this->goal_ar_1,
            'goal_en_1' => $this->goal_en_1,
            'goal_ar_2' => $this->goal_ar_2,
            'goal_en_2' => $this->goal_en_2,
            'goal_ar_3' => $this->goal_ar_3,
            'goal_en_3' => $this->goal_en_3,
            'goal_ar_4' => $this->goal_ar_4,
            'goal_en_4' => $this->goal_en_4,
            'goal_ar_5' => $this->goal_ar_5,
            'goal_en_5' => $this->goal_en_5,
            'goal_ar_6' => $this->goal_ar_6,
            'goal_en_6' => $this->goal_en_6,
            'goal_ar_7' => $this->goal_ar_7,
            'goal_en_7' => $this->goal_en_7,
        ]);

        Configuration::updateOrCreate([
            'id' => $this->id_conf,
        ],[
            'name' => 'goal',
            'status' => $this->status == true ? 1 : 0,
        ]);
        session()->flash('message', 'successfully updated.');
        $this->query();
    }

    public function query() {
        $Goal = Goal::first();
        if ($Goal) {
            $this->id_c = $Goal->id;
            $this->title_ar = $Goal->title_ar;
            $this->title_en = $Goal->title_en;
            $this->desc_ar = $Goal->desc_ar;
            $this->desc_en = $Goal->desc_en;
            $this->title_ar1 = $Goal->title_ar1;
            $this->title_en1 = $Goal->title_en1;
            $this->desc_ar1 = $Goal->desc_ar1;
            $this->desc_en1 = $Goal->desc_en1;
            $this->title_ar_g = $Goal->title_ar_g;
            $this->title_en_g = $Goal->title_en_g;
            $this->goal_ar_1 = $Goal->goal_ar_1;
            $this->goal_en_1 = $Goal->goal_en_1;
            $this->goal_ar_2 = $Goal->goal_ar_2;
            $this->goal_en_2 = $Goal->goal_en_2;
            $this->goal_ar_3 = $Goal->goal_ar_3;
            $this->goal_en_3 = $Goal->goal_en_3;
            $this->goal_ar_4 = $Goal->goal_ar_4;
            $this->goal_en_4 = $Goal->goal_en_4;
            $this->goal_ar_5 = $Goal->goal_ar_5;
            $this->goal_en_5 = $Goal->goal_en_5;
            $this->goal_ar_6 = $Goal->goal_ar_6;
            $this->goal_en_6 = $Goal->goal_en_6;
            $this->goal_ar_7 = $Goal->goal_ar_7;
            $this->goal_en_7 = $Goal->goal_en_7;
        }

        $conf = Configuration::where('name' ,'goal')->first();
        if ($conf) {
            $this->status = $conf->status == 0 ? false : true;
            $this->id_conf = $conf->id;
        }
    }
}
