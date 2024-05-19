@extends('layouts.frontendlayout')

@section('content')

<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title text-center text-primary text-uppercase">Our Team</h6>
            <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Staffs</span></h1>
        </div>
        <div class="row">
            @foreach ($members as $member)
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card rounded shadow overflow-hidden" style="height: 400px;">
                        <div class="rounded position-relative d-flex justify-content-center align-items-center" style="height: 200px;">
                            <img class="rounded-circle" src="{{ asset('storage/'.$member->image) }}" style="width: 150px; height: 150px; object-fit: cover;" alt="">
                        </div>
                        <div class="text-center p-4 mt-3" style="height: calc(100% - 200px); overflow: hidden;">
                            <h5 class="fw-bold mb-0">{{ $member->name }}</h5>
                            <i class="fa fa-google-plus"></i><b>{{ $member->email }}</b><br>
                            <i class="fa fa-location-arrow"></i><b>{{ $member->adress }}</b><br>
                            <a href="#star"><i class="fa fa-star"></i></a><b>{{ $member->position }}</b><br>
                            <small>{{ $member->description}}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Team End -->

@endsection
