<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Navbar extends Component
{

    public function logout() {
        Auth::logout();
        return redirect()->to('/login');
    }
    public function render()
    {
        return view('livewire.navbar');
    }
}
