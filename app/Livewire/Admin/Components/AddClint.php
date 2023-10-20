<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;
use Livewire\WithFileUploads;

class AddClint extends Component
{
    use WithFileUploads;
    public $image1 = '';
    public $title_ar = '';
    public $title_en = '';
    public $id_c = '';

    protected $rules = [
        'image1' => 'required',
        'title_ar' => 'required',
        'title_en' => 'required',
    ];

    public function render()
    {
        return view('livewire.admin.components.add-clint');
    }

    public function mount($id) {
        $Clint = \App\Models\Clint::where('id' ,$id)->first();
        if ($Clint) {
            $this->id_c = $Clint->id;
            $this->title_ar = $Clint->title_ar;
            $this->title_en = $Clint->title_en;
            $this->image1 = $Clint->image;
        }
    }

    public function save() {
        $this->validate();

        $logo1 = !method_exists($this->image1, 'temporaryUrl') ? $this->image1 : $this->image1->store('public/img/banner');
        $logo1 = str_replace('public/','',$logo1);

        \App\Models\Clint::updateOrCreate([
            'id' => $this->id_c,
        ],[
            'title_ar' => $this->title_ar,
            'title_en' => $this->title_en,
            'image' => $logo1
        ]);

        return redirect()->to('/components/clint');
    }
}
