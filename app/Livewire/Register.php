<?php

namespace App\Livewire;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Support\Facades\Date;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{
    use WithFileUploads;
    public $username;
    public $email;
    public $password;
    public $image;
    protected $rules = [
        'username' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required',
    ];
    public function submitHandle(){
        $this->validate();
        if($this->image) {
            $path = "IMG"."_".Time().'.'.$this->image->getClientOriginalExtension();
            $db_path = $this->image->storeAs('public/profile',$path);
             User::create([
            'name' => $this->username,
            'email' => $this->email,
            'image' => $db_path,
            'password' => Hash::make($this->password),
            ]);
        }else{
            User::create([
                'name' => $this->username,
                'email' => $this->email,
                'password' => Hash::make($this->password),
            ]);
        }
        return redirect('/login');
    }
    public function render()
    {
        return view('livewire.register')->layout('app');
    }
}

