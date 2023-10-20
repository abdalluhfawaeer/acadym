<?php

namespace App\Livewire\Admin\Components;

use App\Models\Configuration;
use App\Models\Course;
use App\Models\CoursesCu;
use Livewire\Component;
use Livewire\WithPagination;

class Courses extends Component
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
        return view('livewire.admin.components.courses', [
            'courses' => Course::orderBy('id', 'desc')->paginate(5),
        ]);
    }

    public function mount() {
        $this->query();
    }

    public function save() {
        CoursesCu::updateOrCreate([
            'id' => $this->id_c,
        ],[
            'title_ar' => $this->title_ar,
            'title_en' => $this->title_en,
        ]);

        Configuration::updateOrCreate([
            'id' => $this->id_conf,
        ],[
            'name' => 'courses',
            'status' => $this->status == true ? 1 : 0,
        ]);
        session()->flash('message', 'successfully updated.');
        $this->query();
    }

    public function query() {
        $CoursesCu = CoursesCu::first();
        if ($CoursesCu) {
            $this->id_c = $CoursesCu->id;
            $this->title_ar = $CoursesCu->title_ar;
            $this->title_en = $CoursesCu->title_en;
        }

        $conf = Configuration::where('name' ,'courses')->first();
        if ($conf) {
            $this->status = $conf->status == 0 ? false : true;
            $this->id_conf = $conf->id;
        }
    }

    public function delete($id) {
        \App\Models\Course::where('id' ,$id)->delete();
    }
}
