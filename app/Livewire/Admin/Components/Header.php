<?php

namespace App\Livewire\Admin\Components;

use App\Models\Configuration;
use App\Models\Header as HeaderModel;
use Livewire\Component;

class Header extends Component
{
    public $address_ar = '';
    public $address_en = '';
    public $email = '';
    public $facebook = '';
    public $twitter = '';
    public $instagram = '';
    public $youtube = '';
    public $whatsapp = '';
    public $id_c = '';
    public $status = true;
    public $id_conf = '';

    public function mount() {
        $this->query();
    }

    public function render()
    {
        return view('livewire.admin.components.header');
    }

    public function save() {
        HeaderModel::updateOrCreate([
            'id' => $this->id_c,
        ],[
            'address_ar' => $this->address_ar,
            'address_en' => $this->address_en,
            'email' => $this->email,
            'facebook' => $this->facebook,
            'twitter' => $this->twitter,
            'instagram' => $this->instagram,
            'youtube' => $this->youtube,
            'whatsapp' => $this->whatsapp,
        ]);

        Configuration::updateOrCreate([
            'id' => $this->id_conf,
        ],[
            'name' => 'header',
            'status' => $this->status == true ? 1 : 0,
        ]);
        session()->flash('message', 'successfully updated.');
        $this->query();
    }

    public function query() {
        $header = HeaderModel::first();
        if ($header) {
            $this->id_c = $header->id;
            $this->address_ar = $header->address_ar;
            $this->address_en = $header->address_en;
            $this->email = $header->email;
            $this->facebook = $header->facebook;
            $this->twitter = $header->twitter;
            $this->instagram = $header->instagram;
            $this->youtube = $header->youtube;
            $this->whatsapp = $header->whatsapp;
        }

        $conf = Configuration::where('name' ,'header')->first();
        if ($conf) {
            $this->status = $conf->status == 0 ? false : true;
            $this->id_conf = $conf->id;
        }
    }
}
