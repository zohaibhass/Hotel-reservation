@extends('layouts.frontendlayout')

@section('content')

 <!-- Service Start -->
 <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-center text-primary text-uppercase">Our Services</h6>
            <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Services</span></h1>
        </div>
        <div class="row g-4">
        @foreach ($services_data as $service )


            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                <a class="service-item rounded" href="">
                    <div class="service-icon bg-transparent border rounded p-1">
                        <img class="img-fluid" src="{{ asset('storage/'.$service->image) }}" style="object-fit: cover; width: 100%; height: 100%;" alt="">

                    </div>
                    <h5 class="mb-3">{{ $service->title }}</h5>
                    <p class="text-body mb-0">{{ $service->description }}</p>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Service End -->

@endsection
