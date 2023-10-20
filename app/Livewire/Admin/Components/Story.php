<?php

namespace App\Livewire\Admin\Components;

use App\Models\Configuration;
use Livewire\Component;
use Livewire\WithFileUploads;

class Story extends Component
{
    use WithFileUploads;

    public $image1 = '';
    public $title_ar = '';
    public $title_en = '';
    public $title_ar1 = '';
    public $title_en1 = '';
    public $sub_title_ar = '';
    public $sub_title_en = '';
    public $sub_title_ar1 = '';
    public $sub_title_en1 = '';
    public $desc_ar = '';
    public $desc_en = '';
    public $desc_ar1 = '';
    public $desc_en1 = '';
    public $desc_ar2 = '';
    public $desc_en2 = '';
    public $id_c = '';
    public $status = true;
    public $id_conf = '';

    public function render()
    {
        return view('livewire.admin.components.story');
    }

    public function mount() {
        $this->query();
    }

    public function query() {
        $story = \App\Models\Story::first();
        if ($story) {
            $this->id_c = $story->id;
            $this->image1 = $story->image1;
            $this->title_ar = $story->title_ar;
            $this->title_en = $story->title_en;
            $this->title_ar1 = $story->title_ar1;
            $this->title_en1 = $story->title_en1;
            $this->sub_title_ar = $story->sub_title_ar;
            $this->sub_title_en = $story->sub_title_en;
            $this->sub_title_ar1 = $story->sub_title_ar1;
            $this->sub_title_en1 = $story->sub_title_en1;
            $this->desc_ar = $story->desc_ar;
            $this->desc_en = $story->desc_en;
            $this->desc_ar1 = $story->desc_ar_1;
            $this->desc_en1 = $story->desc_en_1;
            $this->desc_ar2 = $story->desc_ar_2;
            $this->desc_en2 = $story->desc_en_2;
        }

        Configuration::updateOrCreate([
            'id' => $this->id_conf,
        ],[
            'name' => 'story',
            'status' => $this->status == true ? 1 : 0,
        ]);
    }

    public function save() {
        $logo1 = !method_exists($this->image1, 'temporaryUrl') ? $this->image1 : $this->image1->store('public/img/banner');
        $logo1 = str_replace('public/','',$logo1);

        \App\Models\Story::updateOrCreate([
            'id' => $this->id_c,
        ],[
            'image1' => $logo1,
            'title_ar' => $this->title_ar,
            'title_en' => $this->title_en,
            'sub_title_ar' => $this->sub_title_ar,
            'sub_title_en' => $this->sub_title_en,
            'desc_ar' => $this->desc_ar,
            'desc_en' => $this->desc_en,
            'sub_title_ar1' => $this->sub_title_ar1,
            'sub_title_en1' => $this->sub_title_en1,
            'desc_ar_1' => $this->desc_ar1,
            'desc_en_1' => $this->desc_en1,
            'desc_ar_2' => $this->desc_ar2,
            'desc_en_2' => $this->desc_en2,
            'title_ar1' => $this->title_ar1,
            'title_en1' => $this->title_en1,
        ]);

        $conf = Configuration::where('name' ,'story')->first();
        if ($conf) {
            $this->status = $conf->status == 0 ? false : true;
            $this->id_conf = $conf->id;
        }
        session()->flash('message', 'successfully updated.');
        $this->query();
    }
}
