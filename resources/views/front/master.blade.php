


@include('front.particles.head')


<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        @include('front.particles.spinner')
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        @include('front.particles.navbar')
        <!-- Navbar & Hero End -->


        @yield('content')


        <!-- Footer Start -->
        @include('front.particles.footer')
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    @include('front.particles.scripts')

</body>

</html>
