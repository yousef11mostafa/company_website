@extends('admin.master')

@section('title','create_services')

@section('content')

<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
          <h2 class="page-title">{{ __('keywords.messages') }}</h2>
          <div class="card-deck">
            <div class="card shadow mb-4">
              <div class="card-header">
                <strong class="card-title">Basic form</strong>
              </div>
              <div class="card-body">
                {{-- <form method="POST" action="{{ route("superadmin.messages.store") }}" enctype="multipart/form-data"> --}}
                    @csrf
                  <div class="form-group">
                    <label for="inputAddress">name</label>
                    <input type="text" name="name" class="form-control" id="inputAddress" placeholder="name" value="{{ $message->name }}">

                  </div>
                  <div class="form-group">
                    <label for="inputAddress2">email </label>
                    <input type="text" name="email" class="form-control" id="inputAddress2"  placeholder="email " value="{{ $message->email }}">

                  </div>
                  <div class="form-group">
                    <label for="inputAddress3">subject </label>
                    <input type="text" name="subject" class="form-control" id="inputAddress3"  placeholder="subject " value="{{ $message->subject }}">

                  </div>
                  <div class="form-group">
                    <label for="inputAddress4">message </label>
                    <textarea  class="form-control"name="message" id="inputAddress4">{{ $message->message }}</textarea>
                  </div>



                  {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
                {{-- </form> --}}
              </div>
            </div>

          </div> <!-- / .card-desk-->
     <!-- end section -->
        </div> <!-- .col-12 -->
      </div> <!-- .row -->
    </div> <!-- .container-fluid -->


  </main>


@endsection
