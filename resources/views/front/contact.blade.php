
@extends('front.master')

@section('contact_active_link','active')

@section('title','contact')


@section('content')

<div class="container-xxl bg-primary page-header">
    <div class="container text-center">
        <h1 class="text-white animated zoomIn mb-3">Contact Us</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
            </ol>
        </nav>
    </div>
</div>
</div>
<!-- Navbar & Hero End -->


<!-- Contact Start -->
<div class="container-xxl py-6">
<div class="container">
    <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
        <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Contact Us</div>
        <h2 class="mb-5">If You Have Any Query, Please Feel Free Contact Us</h2>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.3s">
            <p class="text-center mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>

             <x-success-alert></x-success-alert>

            <form method="post" action="{{ route("front.contact.store") }}" enctype="multipart/form-data" >
                @csrf

                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
                            <x-form-label for="name" content="Your Name"  ></x-form-label>
                        </div>
                        <x-validation-error name="name"></x-validation-error>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="email" name="email" class="form-control" id="email" placeholder="Your Email">
                            <x-form-label for="email" content="Your Email"  ></x-form-label>
                        </div>
                        <x-validation-error name="email"></x-validation-error>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject">
                            <x-form-label for="subject" content="Subject"  ></x-form-label>
                        </div>
                        <x-validation-error name="subject"></x-validation-error>
                    </div>
                    <div class="col-12">
                        <div class="form-floating">
                            <textarea class="form-control" name="message" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                            <x-form-label for="message" content="Message"  ></x-form-label>
                        </div>
                        <x-validation-error name="message"></x-validation-error>
                    </div>
                    <div class="col-12">
                        {{-- <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button> --}}
                        <x-submit-button></x-submit-button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
</div>
<!-- Contact End -->



@endsection
