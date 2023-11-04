<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Post;
use Livewire\Component;

class BlogDetails extends Component
{
    public $blogDetails;
    public function mount($id){
        $this->blogDetails = Post::findOrFail($id);
    }
    public function render()
    {
        $categories = Category::all();
        $latests = Post::orderBy('title','ASC')->take(3)->get();
        return view('livewire.blog-details',[
            'blogDetails' => $this->blogDetails,
            'categories' => $categories,
            'latests' => $latests
        ]);
    }
}
