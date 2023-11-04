<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Url;

class BlogPage extends Component
{
    use WithPagination;
    #[Url]
    
    public $query = '';
    public $categorySlug = null;
 
    public function search()
    {
        $this->resetPage();
    }
   
    public function render()
    {
        $categories = Category::all();
        if(!empty($this->categorySlug))
        {
            $category = Category::where('slug',$this->categorySlug)->first();
            if(empty($category))
            {
                abort(404);
            }
            $articles = Post::orderBy('published_at','DESC')
                        ->where('category_id',$category->id)
                        ->paginate(4);
        }
        else
        {
            $articles = Post::orderBy('published_at','DESC')
                        ->where('title', 'like', '%'.$this->query.'%')->paginate(4);
        }
            
        
        $latests = Post::orderBy('title','ASC')->take(3)->get();
        
        return view('livewire.blog-page',
        [
            'articles' => $articles,
            'categories' => $categories,
            'latests' => $latests
        ]);
    }


}
