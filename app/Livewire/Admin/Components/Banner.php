<?php

namespace App\Livewire\Admin\Components;

use App\Models\Configuration;
use Livewire\Component;
use Livewire\WithFileUploads;

class Banner extends Component
{
    use WithFileUploads;

    public $image1 = '';
    public $title_ar1 = '';
    public $title_en1 = '';
    public $sub_title_ar1 = '';
    public $sub_title_en1 = '';
    public $image2 = '';
    public $title_ar2 = '';
    public $title_en2 = '';
    public $sub_title_ar2 = '';
    public $sub_title_en2 = '';
    public $image3 = '';
    public $title_ar3 = '';
    public $title_en3 = '';
    public $sub_title_ar3 = '';
    public $sub_title_en3 = '';
    public $id_c = '';
    public $status = true;
    public $id_conf = '';

    public function render()
    {
        return view('livewire.admin.components.banner');
    }

    public function mount() {
        $this->query();
    }

    public function query() {
        $banner = \App\Models\Banner::first();
        if ($banner) {
            $this->id_c = $banner->id;
            $this->image1 = $banner->image1;
            $this->title_ar1 = $banner->title_ar1;
            $this->title_en1 = $banner->title_en1;
            $this->sub_title_ar1 = $banner->sub_title_ar1;
            $this->sub_title_en1 = $banner->sub_title_en1;
            $this->image2 = $banner->image2;
            $this->title_ar2 = $banner->title_ar2;
            $this->title_en2 = $banner->title_en2;
            $this->sub_title_ar2 = $banner->sub_title_ar2;
            $this->sub_title_en2 = $banner->sub_title_en2;
            $this->image3 = $banner->image3;
            $this->title_ar3 = $banner->title_ar3;
            $this->title_en3 = $banner->title_en3;
            $this->sub_title_ar3 = $banner->sub_title_ar3;
            $this->sub_title_en3 = $banner->sub_title_en3;
        }

        $conf = Configuration::where('name' ,'banner')->first();
        if ($conf) {
            $this->status = $conf->status == 0 ? false : true;
            $this->id_conf = $conf->id;
        }
    }

    public function save() {
        $logo1 = !method_exists($this->image1, 'temporaryUrl') ? $this->image1 : $this->image1->store('public/img/banner');
        $logo1 = str_replace('public/','',$logo1);

        $logo2 = !method_exists($this->image2, 'temporaryUrl') ? $this->image2 : $this->image2->store('public/img/banner');
        $logo2 = str_replace('public/','',$logo2);

        $logo3 = !method_exists($this->image3, 'temporaryUrl') ? $this->image3 : $this->image3->store('public/img/banner');
        $logo3 = str_replace('public/','',$logo3);
        \App\Models\Banner::updateOrCreate([
            'id' => $this->id_c,
        ],[
            'image1' => $logo1,
            'title_ar1' => $this->title_ar1,
            'title_en1' => $this->title_en1,
            'sub_title_ar1' => $this->sub_title_ar1,
            'sub_title_en1' => $this->sub_title_en1,
            'image2' => $logo2,
            'title_ar2' => $this->title_ar2,
            'title_en2' => $this->title_en2,
            'sub_title_ar2' => $this->sub_title_ar2,
            'sub_title_en2' => $this->sub_title_en2,
            'image3' => $logo3,
            'title_ar3' => $this->title_ar3,
            'title_en3' => $this->title_en3,
            'sub_title_ar3' => $this->sub_title_ar3,
            'sub_title_en3' => $this->sub_title_en3,
        ]);

        Configuration::updateOrCreate([
            'id' => $this->id_conf,
        ],[
            'name' => 'banner',
            'status' => $this->status == true ? 1 : 0,
        ]);
        session()->flash('message', 'successfully updated.');
        $this->query();
    }
}
