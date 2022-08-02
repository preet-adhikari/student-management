<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Users\IndexUsers;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class DeleteModal extends ModalComponent
{
    public User $user;

    protected $listeners = ['delete'];
    public function mount(User $user){
        $this->user = $user;
    }

    public function delete()
    {
        $role = strtolower($this->user->role->designation);

        //Delete the user
        try {
            $this->user->delete();
            $this->closeModalWithEvents([
                IndexUsers::getName() => ['deleteUsers',[$role]]
            ]);

        }catch (\Exception $e){
            $this->closeModalWithEvents([
                IndexUsers::getName() => ['deletionError' , [$e->getMessage()] , [$role]]
            ]);
        }
    }


    public function render()
    {
        return view('livewire.delete-modal');
    }
}
