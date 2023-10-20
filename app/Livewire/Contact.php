<?php

namespace App\Livewire;

use App\Models\ContactUser;
use Livewire\Component;

class Contact extends Component
{
    public $contact = [];
    public $header = [];
    public $phone = [];
    public $first = '';
    public $last = '';
    public $email = '';
    public $msg = '';
    protected $rules = [
        'first' => 'required',
        'email' => 'required',
        'last' => 'required',
    ];

    public function render()
    {
        return view('livewire.contact');
    }

    public function mount() {
        $this->contact = \App\Models\Contact::first();
        $this->header = \App\Models\Header::first();
        for ($i = 1 ; $i <= 7 ; $i++) {
            if (!empty($this->contact['phone'.$i])) {
                $this->phone[] = [
                    'phone' => $this->contact['phone'.$i]
                ];
            }
        }
    }

    public function save() {
        $this->validate();

        ContactUser::insert([
            'first' => $this->first,
            'last' => $this->last,
            'email' => $this->email,
            'msg' => $this->msg,
        ]);

        $this->first = '';
        $this->last = '';
        $this->email = '';
        $this->msg = '';
        session()->flash('message', 'successfully send.');
    }
}
