<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;


class EditUser extends ModalComponent
{
    public $user;
    public $password;
    public $password_confirmation;

    public function mount(User $user){
        $this->user = $user;
    }

    public function update()
    {
        if ($this->password){
            $this->validate([
               'password' => 'min:8 | confirmed'
            ]);
            $this->user->update([
                'password' => Hash::make($this->password)
            ]);
        }
        $this->validate();
        try {
            $this->user->update([
                'name' => $this->user['name'],
                'address' => $this->user['address'],
                'email' => $this->user['email'],
                'phone_number' => $this->user['phone_number']
            ]);
            $this->closeModalWithEvents([
                IndexUsers::getName() => ['updateUser' , [strtolower($this->user->role->designation)]]
            ]);
        } catch (\Exception $e){
            dd($e->getMessage());
        }
    }

    public function rules()
    {
        return [
          'user.name' => ['required' , 'string', 'max:255'],
          'user.address' => ['required' , 'string' , 'max:255'],
          'user.phone_number' => ['required'] ,
            'user.email' => ['required']
        ];
    }

    public function render()
    {
        return view('livewire.users.edit-user', compact($this->user));
    }
}
