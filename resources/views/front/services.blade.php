@extends('front.master')

@section('services_active_link','active')

@section('title','services')


@section('content')

<div class="container-xxl bg-primary page-header">
    <div class="container text-center">
        <h1 class="text-white animated zoomIn mb-3">Services</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Services</li>
            </ol>
        </nav>
    </div>
</div>
</div>
<!-- Navbar & Hero End -->


<!-- Service Start -->

  <x-services-component :services="$services"></x-services-component>
<!-- Service End -->


<!-- Testimonial Start -->

 <x-testmonials-component></x-testmonials-component>

<!-- Testimonial End -->


@endsection
