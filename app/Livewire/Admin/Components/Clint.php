<?php

namespace App\Livewire\Admin\Components;

use App\Models\Clintcu;
use App\Models\Configuration;
use Livewire\Component;
use Livewire\WithPagination;

class Clint extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $title_ar = '';
    public $title_en = '';
    public $id_c = '';
    public $status = true;
    public $id_conf = '';

    public function render()
    {
        return view('livewire.admin.components.clint', [
            'courses' => \App\Models\Clint::orderBy('id', 'desc')->paginate(5),
        ]);
    }

    public function mount() {
        $this->query();
    }

    public function save() {
        Clintcu::updateOrCreate([
            'id' => $this->id_c,
        ],[
            'title_ar' => $this->title_ar,
            'title_en' => $this->title_en,
        ]);

        Configuration::updateOrCreate([
            'id' => $this->id_conf,
        ],[
            'name' => 'clint',
            'status' => $this->status == true ? 1 : 0,
        ]);
        session()->flash('message', 'successfully updated.');
        $this->query();
    }

    public function query() {
        $Clintcu = Clintcu::first();
        if ($Clintcu) {
            $this->id_c = $Clintcu->id;
            $this->title_ar = $Clintcu->title_ar;
            $this->title_en = $Clintcu->title_en;
        }

        $conf = Configuration::where('name' ,'clint')->first();
        if ($conf) {
            $this->status = $conf->status == 0 ? false : true;
            $this->id_conf = $conf->id;
        }
    }

    public function delete($id) {
        \App\Models\Clint::where('id' ,$id)->delete();
    }
}
