<?php

namespace App\Livewire;

use App\Models\Member;
use App\Models\Post;
use App\Models\Service;
use Livewire\Component;

class ShowHome extends Component
{
    public function render()
    {
        $teams = Member::all();
        $latests = Post::orderBy('title','ASC')->take(3)->get();
        $sliders = Post::orderBy('title','DESC')->take(5)->get();
        $services = Service::orderBy('title','ASC')->get();
        return view('livewire.show-home',['services'=>$services],compact('latests','sliders','teams'));
    }
}