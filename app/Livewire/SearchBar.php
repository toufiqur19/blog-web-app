<?php

namespace App\Livewire;

use App\Models\Post;
use App\Models\User;
use Livewire\Component;

class SearchBar extends Component
{
    public $search = "";
    public function render()
    {
        $results = [];

        if(strlen($this->search)>= 1)
        {
            $results = Post::where('title','Like','%'.$this->search.'%')->limit(5)->get();
        }
        return view('livewire.search-bar',[
            'users' => $results
        ]);
    }
}
