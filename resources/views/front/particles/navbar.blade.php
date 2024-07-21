



<div class="container-xxl position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
        <a href="{{ route("front.home") }}" class="navbar-brand p-0">
            <h1 class="m-0">BizConsult</h1>
            <!-- <img src="{{asset("front/img")}}/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                 @auth
                 <a href="{{ Route('superadmin.index') }}" class="nav-item nav-link .  .">Dashboard</a>
                 @endauth
                <a href="{{ Route('front.home') }}" class="nav-item nav-link . @yield('home_active_link') .">Home</a>
                <a href="{{ Route('front.about') }}" class="nav-item nav-link . @yield('about_active_link') ." >About</a>
                <a href="{{ Route('front.services') }}" class="nav-item nav-link . @yield('services_active_link') .">Service</a>
                <a href="{{ route('front.contact') }}" class="nav-item nav-link . @yield('contact_active_link') .">Contact</a>
            </div>
        </div>
    </nav>


