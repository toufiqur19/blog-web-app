<main>
    <section class="page-header bg-tertiary py-5">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto text-center">
                    <h2 class="mb-3 text-capitalize">{{ $service->title}}</h2>
                    <ul class="list-inline breadcrumbs text-capitalize" style="font-weight:500">
                        <li class="list-inline-item"><a wire:navigate href="{{route('home')}}">Home</a>
                        </li>
                        <li class="list-inline-item">/ &nbsp; <a wire:navigate href="{{route('servicesPage')}}">Services</a>
                        </li>
                        <li class="list-inline-item">/ &nbsp; <a href="">{{ $service->title}}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <section class="section-sm">
        <div class="container">
            <div class="row g-5">
                
                <div class="col-lg-12 service_dtl container pb-5">
                    <div class="contents">
                        {!! $service-> description !!}					
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

