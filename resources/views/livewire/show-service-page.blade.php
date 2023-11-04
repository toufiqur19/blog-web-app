<main>
    <section class="page-header bg-tertiary py-5">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto text-center">
                    <h2 class="mb-3 text-capitalize">Blog</h2>
                    <ul class="list-inline breadcrumbs text-capitalize" style="font-weight:500">
                        <li class="list-inline-item"><a wire:navigate href="{{route('home')}}">Home</a>
                        </li>
                        <li class="list-inline-item">/ &nbsp; <a wire:navigate href="{{route('servicesPage')}}">Service</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <section class="section">
        <div class="container">
            <div class="row pb-5 justify-content-center">
                    @foreach ($services as $service)
                    <div class="icon-box-item text-center col-lg-4 col-md-6 mb-4">
                      <div class="rounded shadow py-5 px-4">
                        <div class="icon">{!! $service->icon_class !!}</div>
                        <h3 class="service-title">{{ $service->title }}</h3>
                        <p class="mb-0 service-description pb-3">{{ $service->short_desc }}</p><a class="btn btn-sm btn_dtl" wire:navigate href="{{route('servicesDetals',$service->id)}}">View Details <i class="las la-arrow-right ms-1"></i></a>
                      </div>
                    </div>
                    @endforeach
            </div>
        </div>
    </section>
</main>
