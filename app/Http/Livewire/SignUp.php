<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class SignUp extends Component
{
    public $first_nm;
    public $last_nm;
    public $email;
    public $trn;
    public $address;
    public $mail;
    public $gender;
    public $user_type;
    public $password;

    protected $rules = [
        'first_nm' => 'required',
        'last_nm' => 'required',
        'address' => 'required',
        'mail' => 'required',
        'trn' => 'required',
        'email' => 'required|email',
        'gender' => 'required',
        'password' => 'required'
    ];


    public function newmember()
    {
        $this->validate();

        User::create([
            'first_nm' => $this->first_nm,
            'name' => $this->last_nm,
            'email' => $this->email,
            'trn' => $this->trn,
            'address' => $this->address,
            'mail' => $this->mail,
            'gender' => $this->gender,
            'password' => Hash::make($this->password),
        ]);


        session()->flash('success', 'Sales Associate Added Successfully');


    }

    public function updated()
    {
        $this->validate();
    }

    public function render()
    {
        return view('livewire.sign-up');
    }
}
