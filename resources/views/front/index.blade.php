@extends('front.master')

@section('home_active_link','active')

@section('title','home')

@section('content')

<div class="container-xxl bg-primary hero-header">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="text-white mb-4 animated zoomIn">We Help To Push Your Business To The Top Level</h1>
                <p class="text-white pb-3 animated zoomIn">Tempor rebum no at dolore lorem clita rebum rebum ipsum rebum stet dolor sed justo kasd. Ut dolor sed magna dolor sea diam. Sit diam sit justo amet ipsum vero ipsum clita lorem</p>
                <a href="" class="btn btn-outline-light rounded-pill border-2 py-3 px-5 animated slideInRight">Learn More</a>
            </div>
            <div class="col-lg-6 text-center text-lg-start">
                <img class="{{asset("front/img")}}-fluid animated zoomIn" src="{{asset("front/img")}}/hero.png" alt="">
            </div>
        </div>
    </div>
</div>
</div>

        <!-- About Start -->
  
        <x-about-component></x-about-component>
        <!-- About End -->


        <!-- Newsletter Start -->
        <div class="container-xxl bg-primary my-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container px-lg-5">
                <div class="row align-items-center" style="height: 250px;">
                    <div class="col-12 col-md-6">
                        <h3 class="text-white">Ready to get started</h3>
                        <small class="text-white">Diam elitr est dolore at sanctus nonumy.</small>
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Enter Your Email" style="height: 48px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </div>
                    </div>
                    <div class="col-md-6 text-center mb-n5 d-none d-md-block">
                        <img class="{{asset("front/img")}}-fluid mt-5" style="max-height: 250px;" src="{{asset("front/img")}}/newsletter.png">
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter End -->


        <!-- Service Start -->

          <x-services-component :services="$services"></x-services-component>


        <!-- Service End -->


        <!-- Features Start -->
          <x-features-component :features="$features"></x-features-component>
        <!-- Features End -->


        <!-- Client Start -->
        <div class="container-xxl bg-primary my-6 py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="owl-carousel client-carousel">
                    <a href="#"><img class="{{asset("front/img")}}-fluid" src="{{asset("front/img")}}/logo-1.png" alt=""></a>
                    <a href="#"><img class="{{asset("front/img")}}-fluid" src="{{asset("front/img")}}/logo-2.png" alt=""></a>
                    <a href="#"><img class="{{asset("front/img")}}-fluid" src="{{asset("front/img")}}/logo-3.png" alt=""></a>
                    <a href="#"><img class="{{asset("front/img")}}-fluid" src="{{asset("front/img")}}/logo-4.png" alt=""></a>
                    <a href="#"><img class="{{asset("front/img")}}-fluid" src="{{asset("front/img")}}/logo-5.png" alt=""></a>
                    <a href="#"><img class="{{asset("front/img")}}-fluid" src="{{asset("front/img")}}/logo-6.png" alt=""></a>
                    <a href="#"><img class="{{asset("front/img")}}-fluid" src="{{asset("front/img")}}/logo-7.png" alt=""></a>
                    <a href="#"><img class="{{asset("front/img")}}-fluid" src="{{asset("front/img")}}/logo-8.png" alt=""></a>
                </div>
            </div>
        </div>
        <!-- Client End -->


        <!-- Testimonial Start -->
          <x-testmonials-component></x-testmonials-component>
        <!-- Testimonial End -->


        <!-- Team Start -->
        <x-team-component :members="$members"></x-team-component>
        <!-- Team End -->


@endsection
