<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;
use Livewire\WithFileUploads;

class AddCourses extends Component
{
    use WithFileUploads;

    public $image1 = '';
    public $title_ar = '';
    public $title_en = '';
    public $desc_ar = '';
    public $desc_en = '';
    public $id_c = '';
    protected $rules = [
        'image1' => 'required',
        'title_ar' => 'required',
        'title_en' => 'required',
    ];

    public function render()
    {
        return view('livewire.admin.components.add-courses');
    }

    public function mount($id) {
        $Course = \App\Models\Course::where('id' ,$id)->first();
        if ($Course) {
            $this->id_c = $Course->id;
            $this->title_ar = $Course->title_ar;
            $this->title_en = $Course->title_en;
            $this->desc_ar = $Course->desc_ar;
            $this->desc_en = $Course->desc_en;
            $this->image1 = $Course->image;
        }
    }

    public function save() {
        $this->validate();

        $logo1 = !method_exists($this->image1, 'temporaryUrl') ? $this->image1 : $this->image1->store('public/img/banner');
        $logo1 = str_replace('public/','',$logo1);

        \App\Models\Course::updateOrCreate([
            'id' => $this->id_c,
        ],[
            'title_ar' => $this->title_ar,
            'title_en' => $this->title_en,
            'desc_ar' => $this->desc_ar,
            'desc_en' => $this->desc_en,
            'image' => $logo1
        ]);

        return redirect()->to('/components/courses');
    }
}
