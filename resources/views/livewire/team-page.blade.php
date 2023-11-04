<main>
    <section class="page-header bg-tertiary py-5">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto text-center">
                    <h2 class="mb-3 text-capitalize">Our Team Member</h2>
                    <ul class="list-inline breadcrumbs text-capitalize" style="font-weight:500">
                        <li class="list-inline-item"><a wire:navigate href="{{route('home')}}">Home</a>
                        </li>
                        <li class="list-inline-item">/ &nbsp; <a wire:navigate href="{{route('teamPage')}}">Team Member</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    
    <section class="banner bg-tertiary position-relative overflow-hidden">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="row baner">
              <div class="col-md-10 mx-auto text-center">
                    <div class="row position-relative">
                        <div class="section-title text-center">
                        <h3 class="text-dark text-uppercase fw-bold mb-3 text-center">Our Team member</h3>
                        </div>
                        @foreach ($teams as $team)
                        <div class="col-xl-3 col-lg-4 col-md-6 mt-4">
                        <div class="card bg-transparent border-0 text-center">
                            <div class="card-img">
                            <img src="{{asset('storage/'.$team->image)}}" class="" alt="">
                            <ul class="card-social list-inline">
                                @if ($team->fb_url != '')
                                <li class="list-inline-item"><a class="facebook link" target="_blank" href="{{$team->fb_url}}"><i class="fab fa-facebook"></i></a>
                                </li>  
                                @endif
                                @if ($team->tw_url != '')
                                <li class="list-inline-item"><a class="twitter link" target="_blank" href="{{$team->tw_url}}"><i class="fab fa-twitter"></i></a>
                                </li>
                                @endif
                                @if ($team->in_url != '')
                                <li class="list-inline-item"><a class="instagram link" target="_blank" href="{{$team->in_url}}"><i class="fab fa-linkedin"></i></a>
                                </li>
                                @endif
                            </ul>
                            </div>
                            <div class="card-body">
                            <h2>{{$team->name}}</h2>
                            <p>{{$team->designation}}</p>
                            </div>
                        </div>
                        </div>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
