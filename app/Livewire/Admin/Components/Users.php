<?php

namespace App\Livewire\Admin\Components;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Users extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.admin.components.users', [
            'courses' => User::orderBy('id', 'desc')->paginate(5),
        ]);
    }

    public function delete($id) {
        User::where('id' ,$id)->delete();
    }
}
