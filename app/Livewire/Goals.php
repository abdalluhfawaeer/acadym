<?php

namespace App\Livewire;

use App\Models\Goal;
use Livewire\Component;

class Goals extends Component
{
    public $goals = [];
    public $list = [];

    public function render()
    {
        return view('livewire.goals');
    }

    public function mount() {
        $goals = Goal::first();
        $this->goals = $goals;
        for ($i = 1 ; $i <= 7 ; $i++) {
            if (!empty($goals['goal_ar_'.$i]) && !empty($goals['goal_en_'.$i])) {
                $this->list[] = [
                    'list' => app()->getLocale() == 'ar' ? $goals['goal_ar_'.$i] : $goals['goal_en_'.$i]
                ];
            }
        }
    }
}
