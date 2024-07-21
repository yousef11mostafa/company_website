@extends('admin.master')

@section('title','create_testmonials')

@section('content')

<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
          <h2 class="page-title">{{ __('keywords.testmonials') }}</h2>
          <div class="card-deck">
            <div class="card shadow mb-4">
              <div class="card-header">
                <strong class="card-title">Basic form</strong>
              </div>
              <div class="card-body">
                <form method="POST" action="{{ route("superadmin.testmonials.store") }}" enctype="multipart/form-data">
                    @csrf
                  <div class="form-group">
                    <label for="inputAddress">name</label>
                    <input type="text" name="name" class="form-control" id="inputAddress" placeholder="title" value="{{ $testmonial->name }}">

                  </div>
                  <div class="form-group">
                    <label for="inputAddress">position</label>
                    <input type="text" name="position" class="form-control" id="inputAddress" placeholder="title" value="{{ $testmonial->position }}">

                  </div>
                  <div class="form-group">
                    <label for="inputAddress2">image </label>
                    {{-- <input type="text" name="img" class="form-control" id="inputAddress2"  placeholder=" fe-home " value="{{ $testmonial->img }}"> --}}
                    <img src="{{ asset('storage/testmonials/' . $testmonial->img) }}" alt="Testimonial Image" style="width:200px;border-radius:10%;">
                  </div>
                  <div class="form-group">
                    <label for="inputAddress2">description </label>
                    <textarea name="description" class="form-control" id="inputAddress2" >{{ $testmonial->description }}</textarea>

                  </div>


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
