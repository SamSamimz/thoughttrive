<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;
    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:4',
    ];
    public function mount() {
    }
    public function handleLogin() {
        $this->validate();
        $cred = [
            'email' => $this->email,
            'password' => $this->password
        ];
        if(Auth::attempt($cred)) {
            return redirect()->to('/');
        }else {
            session()->flash('message','Invalid login information!');
        }
        $this->email = '';
        $this->password = '';

    }
    public function render()
    {
        return view('livewire.login')->layout('app');
    }
}
