<main>
    <section class="page-header bg-tertiary py-5">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto text-center">
                    <h2 class="mb-3 text-capitalize">Blog Details Page</h2>
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
    <div class="section">
        <div class="container px-5">
          <div class="row justify-content-center">
            {{-- left side --}}
            <div class="col-lg-8">
              <h1>{{$blogDetails->title}}</h1>
              <p class="">{{$blogDetails->published_at}} | {{$blogDetails->name}}</p>
              <div class="blog_details">
                <img src="{{asset('storage/'.$blogDetails->image)}}">
            </div><br>
              {{$blogDetails->description}}
            </div>
            {{-- right side --}}
            <div class="col-lg-4 side_bar py-5">
                <!-- categories -->
                <div class="widget widget-categories">
                    
                    <h5 class="widget-title"><span>Category</span></h5>
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
                    <h5 class="widget-title"><span>Latest Article</span></h5>
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
          </div>
        </div>
      </div>
</main>
