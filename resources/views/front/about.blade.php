@extends('front.master')

@section('about_active_link','active')

@section('title','about')

@section('content')

<div class="container-xxl bg-primary page-header">
    <div class="container text-center">
        <h1 class="text-white animated zoomIn mb-3">About Us</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">About</li>
            </ol>
        </nav>
    </div>
</div>
</div>
<!-- Navbar & Hero End -->


<!-- About Start -->
<x-about-component></x-about-component>
<!-- About End -->


<!-- Features Start -->

<x-features-component :features="$features"></x-features-component>

<!-- Features End -->


<!-- Team Start -->

<x-team-component :members="$members"></x-team-component>

<!-- Team End -->



@endsection
