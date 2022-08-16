<?php

namespace App\Http\Livewire\Users;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class AddUser extends ModalComponent
{
    public function render()
    {
        return view('livewire.users.add-user');
    }
}
