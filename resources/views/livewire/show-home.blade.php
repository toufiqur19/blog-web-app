<main>
    <section class="banner bg-tertiary position-relative overflow-hidden">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="row baner">
              <div class="col-md-9 mx-auto text-center">
                <div id="carouselExampleFade" class="carousel slide slide" data-bs-ride="carousel">
                  <div class="carousel-inner ">
                   
                    @foreach($sliders as $key => $slider)
                    <div class="carousel-item {{$key == 0 ? 'active' : ''}}">
    
                      <img src="{{asset('storage/'.$slider->image)}}" class="" alt="">
                      <div class="carousel-caption d-none d-md-block">
                        <h2 class="text-light">Wellcome To My Blog</h2>
                      </div>
                    </div>
                    @endforeach
                    
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
            </div>
              <div class="col-md-3 mx-auto">
                  <div class="about_me">
                    <img class="my_img" src="{{asset('assets/img/my.jpg')}}" alt="">
                    <p class="py-2">My name is Toufiqur Rahman sobuj.I am 22 years old, I’m currently Studying Computer Science and Engineering(CSE) 5th semester.</p>
                    <ul class="social list-inline">
                      <div class="my_social_link">
                        <li><a class="facebook link" href="https://www.facebook.com/mdtowfequrrahman.sobuj/"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li><a class="twitter link" href="https://www.linkedin.com/in/toufiqur9493/"><i class="fa-brands fa-linkedin"></i></a>
                        </li>
                        <li><a class="instagram link" href="https://github.com/toufiqur19"><i class="fa-brands fa-github"></i></a>
                        </li>
                      </div>
                     <div class="more-btn">
                      <a class="link" wire:navigate href="{{route('aboutUs')}}">More About>></a>
                     </div>
                    </ul>
                  </div>
              </div>
          </div>
          </div>
        </div>
    </section>
      

    <section class="banner bg-tertiary position-relative overflow-hidden">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="row baner">
            <div class="col-md-9 mx-auto text-center">
              @include('livewire.ad-page')
                <div class="row">
                  <div class="section-title text-center">
                    <h3 class="text-dark text-uppercase fw-bold mb-3 text-center">Our service</h3>
                  </div>
                  @foreach ($services as $service)
                  <div class="icon-box-item text-center col-lg-4 col-md-6 mb-4">
                    <div class="rounded shadow py-5 px-4">
                      <div class="icon pb-2">{!! $service->icon_class !!}</div>
                      <h3 class="service-title">{{ $service->title }}</h3>
                      <p class="mb-0 service-description pb-3">{{ $service->short_desc }}</p><a class="btn btn-sm btn_dtl" wire:navigate href="{{route('servicesDetals',$service->id)}}">View Details <i class="las la-arrow-right ms-1"></i></a>
                    </div>
                  </div>
                  @endforeach
                </div>
                

              </div>
            
            <div class="col-md-3 mx-auto">
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
                            <h6 class=" mb-0 pb-2"><a wire:navigate href="{{route('blogDetailsPage', $latest->id)}}">{{$latest->title}}</a></h6>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            </div>
        </div>
        </div>
      </div>
  </section>

  
      
</main>
