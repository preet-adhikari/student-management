<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class EditUser extends ModalComponent
{
    public $teacher;

    public function mount(User $user){
        $this->teacher = $user;
    }

    public function render()
    {
        return view('livewire.users.edit-user', compact($this->teacher));
    }
}
