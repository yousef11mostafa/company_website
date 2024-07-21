@if (count($members))

<div class="container-xxl py-6">
    <div class="container">
        <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Our Team</div>
            <h2 class="mb-5">Meet Our Team Members</h2>
        </div>
        <div class="row g-4">
            @foreach ($members as $member)
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <h5>{{ $member->name }}</h5>
                    <p class="mb-4">{{ $member->position }}</p>
                    <img class="{{asset("front/img")}}-fluid rounded-circle w-100 mb-4" src="{{asset("storage/members/" . $member->img)}}" alt="">
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-square text-primary bg-white m-1" href="{{ $member->facebook }}"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square text-primary bg-white m-1" href="{{ $member->twiter }}"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square text-primary bg-white m-1" href="{{ $member->linked_in }}"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endif
