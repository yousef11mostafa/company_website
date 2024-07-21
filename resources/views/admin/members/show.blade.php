@extends('admin.master')

@section('title','create_members')

@section('content')

<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
          <h2 class="page-title">{{ __('keywords.members') }}</h2>
          <div class="card-deck">
            <div class="card shadow mb-4">
              <div class="card-header">
                <strong class="card-title">Basic form</strong>
              </div>
              <div class="card-body">
                <form method="POST" action="{{ route("superadmin.members.store") }}" enctype="multipart/form-data">
                    @csrf
                  <div class="form-group">
                    <label for="inputAddress">name</label>
                    <input type="text" name="name" class="form-control" id="inputAddress" placeholder="title" value="{{ $member->name }}">

                  </div>
                  <div class="form-group">
                    <label for="inputAddress">position</label>
                    <input type="text" name="position" class="form-control" id="inputAddress" placeholder="title" value="{{ $member->position }}">

                  </div>
                  <div class="form-group">
                    <label for="inputAddress2">image </label>
                    {{-- <input type="text" name="img" class="form-control" id="inputAddress2"  placeholder=" fe-home " value="{{ $member->img }}"> --}}
                    <img src="{{ asset('storage/members/' . $member->img) }}" alt="Testimonial Image" style="width:200px;border-radius:10%;">
                  </div>

                  <div class="form-group">
                    <label for="inputAddress">fackebook</label>
                    <input type="text" name="facebook" class="form-control" id="inputAddress" placeholder="title" value="{{ $member->facebook }}">

                  </div>
                  @if ($member->twiter)
                  <div class="form-group">
                    <label for="inputAddress">twiter</label>
                    <input type="text" name="twiteer" class="form-control" id="inputAddress" placeholder="title" value="{{ $member->twiter }}">

                  </div>
                  @endif

                  @if ($member->linked_in)
                  <div class="form-group">
                    <label for="inputAddress">linked in</label>
                    <input type="text" name="linked in" class="form-control" id="inputAddress" placeholder="title" value="{{ $member->linked_in }}">

                  </div>
                  @endif




                  {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
                </form>
              </div>
            </div>

          </div> <!-- / .card-desk-->
     <!-- end section -->
        </div> <!-- .col-12 -->
      </div> <!-- .row -->
    </div> <!-- .container-fluid -->


  </main>


@endsection
