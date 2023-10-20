<?php

namespace App\Livewire\Admin\Components;

use App\Models\User;
use Livewire\Component;

class AddUsers extends Component
{
    public $username = '';
    public $email = '';
    public $password = '';
    public $id_c = '';

    protected $rules = [
        'username' => 'required',
        'email' => 'required',
    ];

    public function render()
    {
        return view('livewire.admin.components.add-users');
    }

    public function mount($id) {
        $user = User::where('id' ,$id)->first();
        if ($user) {
            $this->id_c = $user->id;
            $this->username = $user->name;
            $this->email = $user->email;
            $this->password = $user->title_ar;
        }
    }

    public function save() {
        $this->validate();

        User::updateOrCreate([
            'id' => $this->id_c,
        ],[
            'name' => $this->username,
            'email' => $this->email,
            'password' => bcrypt($this->password),
            'title_ar' => $this->password,
        ]);

        return redirect()->to('/components/users');
    }
}
