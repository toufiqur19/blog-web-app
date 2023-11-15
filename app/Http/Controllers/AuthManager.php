<?php


namespace App\Livewire;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthManager extends Controller
{
    public function login()
    {
        return view('livewire.login');
    }
    public function registration()
    {
        return view('livewire.registration');
    }
}
