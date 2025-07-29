<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginRegisterModal extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;

    public $login_email;
    public $login_password;
    public $activeTab = 'login'; // default tab
    public $remember = false;

    public function render()
    {
        return view('livewire.login-register-modal');
    }

    public function register()
    {
        $this->activeTab = 'signup'; // set active tab
        $this->resetErrorBag();

        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|confirmed|min:8',
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        Auth::login($user, true);

        return $this->redirect('/account/orders');
    }

    public function setTab($tab)
    {
        $this->activeTab = $tab;
        $this->resetErrorBag(); // optional: clear previous errors
    }

    public function login()
    {
        $this->activeTab = 'login'; // set active tab
        $this->resetErrorBag();

        $credentials = [
            'email' => $this->login_email,
            'password' => $this->login_password,
        ];

        if (Auth::attempt($credentials, $this->remember)) {
            session()->regenerate();
            return $this->redirectIntended('/account/orders');
        } else {
            $this->addError('login_email', 'Invalid email or password.');
        }
    }
}