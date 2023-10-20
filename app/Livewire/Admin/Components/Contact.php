<?php

namespace App\Livewire\Admin\Components;

use App\Models\Configuration;
use Livewire\Component;

class Contact extends Component
{
    public $title_ar = '';
    public $title_en = '';
    public $phone1 = '';
    public $phone2 = '';
    public $phone3 = '';
    public $phone4 = '';
    public $phone5 = '';
    public $title_ar_form = '';
    public $title_en_form = '';
    public $sub_title_ar_form = '';
    public $sub_title_en_form = '';
    public $button_ar_form = '';
    public $button_en_form = '';
    public $google_maps = '';
    public $id_c = '';
    public $status = true;
    public $id_conf = '';

    public function render()
    {
        return view('livewire.admin.components.contact');
    }

    public function mount() {
        $this->query();
    }

    public function save() {
        \App\Models\Contact::updateOrCreate([
            'id' => $this->id_c,
        ],[
            'title_ar' => $this->title_ar,
            'title_en' => $this->title_en,
            'phone1' => $this->phone1,
            'phone2' => $this->phone2,
            'phone3' => $this->phone3,
            'phone4' => $this->phone4,
            'phone5' => $this->phone5,
            'title_ar_form' => $this->title_ar_form,
            'title_en_form' => $this->title_en_form,
            'sub_title_ar_form' => $this->sub_title_ar_form,
            'sub_title_en_form' => $this->sub_title_en_form,
            'button_ar_form' => $this->button_ar_form,
            'button_en_form' => $this->button_en_form,
            'google_maps' => $this->google_maps,
        ]);

        Configuration::updateOrCreate([
            'id' => $this->id_conf,
        ],[
            'name' => 'contact',
            'status' => $this->status == true ? 1 : 0,
        ]);
        session()->flash('message', 'successfully updated.');
        $this->query();
    }

    public function query() {
        $Contact = \App\Models\Contact::first();
        if ($Contact) {
            $this->id_c = $Contact->id;
            $this->title_ar = $Contact->title_ar;
            $this->title_en = $Contact->title_en;
            $this->phone1 = $Contact->phone1;
            $this->phone2 = $Contact->phone2;
            $this->phone3 = $Contact->phone3;
            $this->phone4 = $Contact->phone4;
            $this->phone5 = $Contact->phone5;
            $this->title_ar_form = $Contact->title_ar_form;
            $this->title_en_form = $Contact->title_en_form;
            $this->sub_title_ar_form = $Contact->sub_title_ar_form;
            $this->sub_title_en_form = $Contact->sub_title_en_form;
            $this->button_ar_form = $Contact->button_ar_form;
            $this->button_en_form = $Contact->button_en_form;
            $this->google_maps = $Contact->google_maps;
        }

        $conf = Configuration::where('name' ,'contact')->first();
        if ($conf) {
            $this->status = $conf->status == 0 ? false : true;
            $this->id_conf = $conf->id;
        }
    }
}
