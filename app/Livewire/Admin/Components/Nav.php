<?php

namespace App\Livewire\Admin\Components;

use App\Models\Configuration;
use Livewire\Component;
use Livewire\WithFileUploads;

class Nav extends Component
{
    use WithFileUploads;

    public $title_ar = '';
    public $title_en = '';
    public $sub_title_ar = '';
    public $sub_title_en = '';
    public $img = '';
    public $menu_1_ar = '';
    public $menu_1_en = '';
    public $menu_2_ar = '';
    public $menu_2_en = '';
    public $menu_3_ar = '';
    public $menu_3_en = '';
    public $menu_4_ar = '';
    public $menu_4_en = '';
    public $menu_5_ar = '';
    public $menu_5_en = '';
    public $menu_6_ar = '';
    public $menu_6_en = '';
    public $id_c = '';
    public $status = true;
    public $id_conf = '';

    public function render()
    {
        return view('livewire.admin.components.nav');
    }

    public function mount() {
        $this->query();
    }

    public function query() {
        $nav = \App\Models\Nav::first();
        if ($nav) {
            $this->id_c = $nav->id;
            $this->title_ar = $nav->title_ar;
            $this->title_en = $nav->title_en;
            $this->sub_title_ar = $nav->sub_title_ar;
            $this->sub_title_en = $nav->sub_title_en;
            $this->img = $nav->img;
            $this->menu_1_ar = $nav->menu_1_ar;
            $this->menu_1_en = $nav->menu_1_en;
            $this->menu_2_ar = $nav->menu_2_ar;
            $this->menu_2_en = $nav->menu_2_en;
            $this->menu_3_ar = $nav->menu_3_ar;
            $this->menu_3_en = $nav->menu_3_en;
            $this->menu_4_ar = $nav->menu_4_ar;
            $this->menu_4_en = $nav->menu_4_en;
            $this->menu_5_ar = $nav->menu_5_ar;
            $this->menu_5_en = $nav->menu_5_en;
            $this->menu_6_ar = $nav->menu_6_ar;
            $this->menu_6_en = $nav->menu_6_en;
        }

        Configuration::updateOrCreate([
            'id' => $this->id_conf,
        ],[
            'name' => 'nav',
            'status' => $this->status == true ? 1 : 0,
        ]);
    }

    public function save() {
        $logo = !method_exists($this->img, 'temporaryUrl') ? $this->img : $this->img->store('public/img');
        $logo = str_replace('public/','',$logo);
        \App\Models\Nav::updateOrCreate([
            'id' => $this->id_c,
        ],[
            'title_ar' => $this->title_ar,
            'title_en' => $this->title_en,
            'sub_title_ar' => $this->sub_title_ar,
            'sub_title_en' => $this->sub_title_en,
            'img' => $logo,
            'menu_1_ar' => $this->menu_1_ar,
            'menu_1_en' => $this->menu_1_en,
            'menu_2_ar' => $this->menu_2_ar,
            'menu_2_en' => $this->menu_2_en,
            'menu_3_ar' => $this->menu_3_ar,
            'menu_3_en' => $this->menu_3_en,
            'menu_4_ar' => $this->menu_4_ar,
            'menu_4_en' => $this->menu_4_en,
            'menu_5_ar' => $this->menu_5_ar,
            'menu_5_en' => $this->menu_5_en,
            'menu_6_ar' => $this->menu_6_ar,
            'menu_6_en' => $this->menu_6_en,
        ]);

        $conf = Configuration::where('name' ,'nav')->first();
        if ($conf) {
            $this->status = $conf->status == 0 ? false : true;
            $this->id_conf = $conf->id;
        }
        session()->flash('message', 'successfully updated.');
        $this->query();
    }
}
