<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContractPage extends Component
{
    public $name;
    public $email;
    public $body;
    public function submit()
    {
        $validatedData = $this->validate(['name' 
        => 'required|min:6','email' 
        => 'required|email','body' 
        => 'required',]);
        Contact::create($validatedData);
        return redirect()->to('contract')->with('message',"Your Message Has Been Success ");
    }
    public function render()
    {
        return view('livewire.contract-page');
    }
}
