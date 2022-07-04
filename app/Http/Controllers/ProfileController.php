<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\UpdateProfileRequest;
use App\Http\Requests\Auth\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function update(UpdateProfileRequest $request){
        auth()->user()->update($request->only('name','email'));

        if ($request->input('password')){
            auth()->user()->update([
               'password' => Hash::make($request->input('password'))
            ]);
        }
        return redirect()->route('profile')->with('message' , 'Profile updated successfully');
    }
}
