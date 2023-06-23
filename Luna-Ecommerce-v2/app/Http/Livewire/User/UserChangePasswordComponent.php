<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class UserChangePasswordComponent extends Component
{
    public $currentPassword;
    public $newPassword;
    public $confirmPassword;

    public function changePassword(){
        if(Hash::check($this->currentPassword, Auth::user()->password)){
            $user = User::findOrFail(Auth::user()->id);
            $user->password = Hash::make($this->newPassword);
            $user->save();
            session()->flash('password_success','Password has been changed successfully!');
        }else{
            session()->flash('password_error','Password does not match!');
        }
    }
    
    public function render()
    {
        return view('livewire.user.user-change-password-component');
    }
}