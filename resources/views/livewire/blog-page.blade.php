<main class="blog">
    <section class="page-header bg-tertiary py-5">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto text-center">
                    <h2 class="mb-3 text-capitalize">Blog</h2>
                    <ul class="list-inline breadcrumbs text-capitalize" style="font-weight:500">
                        <li class="list-inline-item"><a wire:navigate href="{{route('home')}}">Home</a>
                        </li>
                        <li class="list-inline-item">/ &nbsp; <a wire:navigate href="{{route('blogPage')}}">Blog</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <section class="section card_item">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 side_bar">
                    <form wire:submit="search">
                        <input class="form-control me-2" type="search" wire:model="query" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    <!-- categories -->
                    <div class="widget widget-categories">
                        
                    <h5 class="widget-title fs-5 my-2"><span>Category</span></h5>
                       @if ($categories->isNotEmpty())
                            @foreach ($categories as $category)
                            <ul class="list-unstyled widget-list categories">			
                                <li><a wire:navigate href="{{route('blogPage').'?categorySlug='.$category->slug}}">{{$category->title}}</a></li>
                            </ul>  
                            @endforeach                           
                       @endif
                    </div>

                
                    <!-- latest post -->
                    <div class="widget">
                        <h5 class="widget-title fs-5 my-2"><span>Latest Article</span></h5>
                        <!-- post-item -->
                        <ul class="list-unstyled widget-list">
                            @foreach ($latests as $latest)   
                            <li class="d-flex widget-post">
                                <a class="text-black" wire:navigate href="{{route('blogDetailsPage', $latest->id)}}">
                                    <div class="widget-post-image flex-shrink-0 me-3">
                                        <img src="{{asset('storage/'.$latest->image)}}">
                                    </div>
                                </a>
                                <div class="flex-grow-1 latest">
                                    <small class="">{{$latest->published_at}} | {{$latest->name}}</small>
                                    <h5 class="h6 mb-0"><a wire:navigate href="{{route('blogDetailsPage', $latest->id)}}">{{$latest->title}}</a></h5>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    
                </div>
                <div class="col">
                    <div class="me">
                        <div class="row gy-3 ">
                           
                           
                           
                            @foreach ($articles as $article)
                            <div class="col-md-6 " data-aos="fade">
                                <article class="blog-post">
                                        <div class="post-slider slider-sm rounded">
                                            <a wire:navigate href="{{route('blogDetailsPage', $article->id)}}">
                                                <img src="{{asset('storage/'.$article->image)}}">
                                            </a>
                                        </div>
                                        <div class="item">
                                            <p class="">{{$article->published_at}} | {{$article->name}}</p>
                                            <h5 class="title">{{$article->title}}</h5>
                                            <p class="dort_desc">{{$article->short_desc}}</p> 
                                            <div class="more-btn">
                                                <a class="link"  wire:navigate href="{{route('blogDetailsPage', $article->id)}}">Read More>></a>
                                            </div>
                                        </div>
                                </article>
                            </div>
                            @endforeach
            
                            
                            
                            
                            <div class="col-12 mb-5">
                               {{$articles->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>