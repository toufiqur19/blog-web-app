@foreach ($ad_services as $ad_service)
    
<div class="ad-section pb-4 text-start">
    <div class="ad-img">
      <a href="https://www.google.com/"><img src="{{asset('storage/'.$ad_service->image)}}" alt=""></a>
    </div>
    <div class="add-details col-12 text-white">
        <h3>{{$ad_service->title}}</h3>
        {{-- <p>{{$ad_service->short_desc}}</p> --}}
    </div>
</div>

@endforeach
