<?php

namespace Adminftr\Core\Future\Admin;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class Profile extends Component
{
    public $currentPassword;
    public $newPassword;
    public $confirmNewPassword;

    public function mount()
    {
        $this->avatar = Auth::user()->avatar;
        $this->email = Auth::user()->email;
    }

    public function updatePassword()
    {
        try {
            $this->validate([
                'currentPassword' => 'required',
                'newPassword' => 'required|min:8',
                'confirmNewPassword' => 'required|same:newPassword',
            ]);

            if (!Hash::check($this->currentPassword, Auth::user()->password)) {
                $this->addError('currentPassword', 'Your current password does not match our records.');
                return;
            }

            Auth::user()->update([
                'password' => Hash::make($this->newPassword)
            ]);

            $this->currentPassword = '';
            $this->newPassword = '';
            $this->confirmNewPassword = '';
        }catch(\Exception $e){
            $this->addError('currentPassword', $e->getMessage());
        }
    }

    public function render()
    {
        return view('future::future.profile.profile');
    }
}
