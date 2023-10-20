<?php

namespace App\Livewire\Admin\Components;

use App\Models\Configuration;
use Livewire\Component;
use Livewire\WithFileUploads;

class WolcomeHome extends Component
{
    use WithFileUploads;
    public $title_ar_main = '';
    public $title_en_main = '';
    public $image1 = '';
    public $title_ar1 = '';
    public $title_en1 = '';
    public $image2 = '';
    public $title_ar2 = '';
    public $title_en2 = '';
    public $image3 = '';
    public $title_ar3 = '';
    public $title_en3 = '';
    public $image4 = '';
    public $title_ar4 = '';
    public $title_en4 = '';
    public $id_c = '';
    public $status = true;
    public $id_conf = '';

    public function render()
    {
        return view('livewire.admin.components.wolcome-home');
    }

    public function mount() {
        $this->query();
    }

    public function query() {
        $wolcome = \App\Models\WolcomeHome::first();
        if ($wolcome) {
            $this->id_c = $wolcome->id;
            $this->title_ar_main = $wolcome->title_ar_main;
            $this->title_en_main = $wolcome->title_en_main;
            $this->image1 = $wolcome->image1;
            $this->title_ar1 = $wolcome->title_ar1;
            $this->title_en1 = $wolcome->title_en1;
            $this->image2 = $wolcome->image2;
            $this->title_ar2 = $wolcome->title_ar2;
            $this->title_en2 = $wolcome->title_en2;
            $this->image3 = $wolcome->image3;
            $this->title_ar3 = $wolcome->title_ar3;
            $this->title_en3 = $wolcome->title_en3;
            $this->image4 = $wolcome->image4;
            $this->title_ar4 = $wolcome->title_ar4;
            $this->title_en4 = $wolcome->title_en4;
        }

        Configuration::updateOrCreate([
            'id' => $this->id_conf,
        ],[
            'name' => 'wolcome',
            'status' => $this->status == true ? 1 : 0,
        ]);
    }

    public function save() {
        $logo1 = !method_exists($this->image1, 'temporaryUrl') ? $this->image1 : $this->image1->store('public/img/banner');
        $logo1 = str_replace('public/','',$logo1);

        $logo2 = !method_exists($this->image2, 'temporaryUrl') ? $this->image2 : $this->image2->store('public/img/banner');
        $logo2 = str_replace('public/','',$logo2);

        $logo3 = !method_exists($this->image3, 'temporaryUrl') ? $this->image3 : $this->image3->store('public/img/banner');
        $logo3 = str_replace('public/','',$logo3);

        $logo4 = !method_exists($this->image4, 'temporaryUrl') ? $this->image4 : $this->image4->store('public/img/banner');
        $logo4 = str_replace('public/','',$logo4);
        \App\Models\WolcomeHome::updateOrCreate([
            'id' => $this->id_c,
        ],[
            'title_ar_main' => $this->title_ar_main,
            'title_en_main' => $this->title_en_main,
            'image1' => $logo1,
            'title_ar1' => $this->title_ar1,
            'title_en1' => $this->title_en1,
            'image2' => $logo2,
            'title_ar2' => $this->title_ar2,
            'title_en2' => $this->title_en2,
            'image3' => $logo3,
            'title_ar3' => $this->title_ar3,
            'title_en3' => $this->title_en3,
            'image4' => $logo4,
            'title_ar4' => $this->title_ar4,
            'title_en4' => $this->title_en4,
        ]);

        $conf = Configuration::where('name' ,'wolcome')->first();
        if ($conf) {
            $this->status = $conf->status == 0 ? false : true;
            $this->id_conf = $conf->id;
        }
        session()->flash('message', 'successfully updated.');
        $this->query();
    }
}
