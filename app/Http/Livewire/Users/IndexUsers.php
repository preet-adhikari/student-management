<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class IndexUsers extends Component
{
    public $userIDs;

    protected $listeners = ['deleteUsers' , 'deletionError', 'userUpdated' => 'render' , 'updateUser'];

    public function mount($users)
    {
        $this->userIDs = $users->pluck('id');
    }

    public function deleteUsers($role){
        return Redirect::to($role)->with('message' , 'User deleted successfully');
    }

    public function deletionError($error , $role) {
        return Redirect::to($role)->with('errors' , 'There was a problem with the deletion');
    }

    public function updateUser($role) {
        return Redirect::to($role)->with('message' , 'User updated successfully');
    }
    public function render()
    {
        $users = User::whereIn('id' , $this->userIDs)->paginate(10);
        return view('livewire.users.index-users',[
            "users" => $users
        ]);
    }
}
