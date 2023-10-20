<?php

namespace App\Livewire\Admin\Components;

use App\Models\Configuration;
use Livewire\Component;
use Livewire\WithFileUploads;

class About extends Component
{
    use WithFileUploads;

    public $image1 = '';
    public $title_ar = '';
    public $title_en = '';
    public $sub_title_ar = '';
    public $sub_title_en = '';
    public $desc_ar = '';
    public $desc_en = '';
    public $id_c = '';
    public $facebook = '';
    public $twitter = '';
    public $instagram = '';
    public $status = true;
    public $id_conf = '';

    public function render()
    {
        return view('livewire.admin.components.about');
    }

    public function mount() {
        $this->query();
    }

    public function query() {
        $about = \App\Models\About::first();
        if ($about) {
            $this->id_c = $about->id;
            $this->image1 = $about->image1;
            $this->title_ar = $about->title_ar;
            $this->title_en = $about->title_en;
            $this->sub_title_ar = $about->sub_title_ar;
            $this->sub_title_en = $about->sub_title_en;
            $this->desc_ar = $about->desc_ar;
            $this->desc_en = $about->desc_en;
            $this->facebook = $about->facebook;
            $this->twitter = $about->twitter;
            $this->instagram = $about->instagram;
        }

        $conf = Configuration::where('name' ,'about')->first();
        if ($conf) {
            $this->status = $conf->status == 0 ? false : true;
            $this->id_conf = $conf->id;
        }
    }

    public function save() {
        $logo1 = !method_exists($this->image1, 'temporaryUrl') ? $this->image1 : $this->image1->store('public/img/banner');
        $logo1 = str_replace('public/','',$logo1);

        \App\Models\About::updateOrCreate([
            'id' => $this->id_c,
        ],[
            'image1' => $logo1,
            'title_ar' => $this->title_ar,
            'title_en' => $this->title_en,
            'sub_title_ar' => $this->sub_title_ar,
            'sub_title_en' => $this->sub_title_en,
            'desc_ar' => $this->desc_ar,
            'desc_en' => $this->desc_en,
            'facebook' => $this->facebook,
            'twitter' => $this->twitter,
            'instagram' => $this->instagram,
        ]);

        Configuration::updateOrCreate([
            'id' => $this->id_conf,
        ],[
            'name' => 'about',
            'status' => $this->status == true ? 1 : 0,
        ]);
        session()->flash('message', 'successfully updated.');
        $this->query();
    }
}
