<?php

namespace App\Livewire;

use App\Models\Member;
use Livewire\Component;

class TeamPage extends Component
{
    public function render()
    {
        $teams = Member::all();
        return view('livewire.team-page', compact('teams'));
    }
}
