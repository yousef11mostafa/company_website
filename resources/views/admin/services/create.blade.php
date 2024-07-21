@extends('admin.master')

@section('title','create_services')

@section('content')

<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">
          <h2 class="page-title">{{ __('keywords.services') }}</h2>
          <div class="card-deck">
            <div class="card shadow mb-4">
              <div class="card-header">
                <strong class="card-title">Basic form</strong>
              </div>
              <div class="card-body">
                <form method="POST" action="{{ route("superadmin.services.store") }}" enctype="multipart/form-data">
                    @csrf
                  {{-- <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Email</label>
                      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Password</label>
                      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                    </div>
                  </div> --}}
                  <div class="form-group">
                    <x-form-label for="inputAddress" content="title"></x-form-label>
                    <input type="text" name="title" class="form-control" id="inputAddress" placeholder="title">
                        <x-validation-error name='title'></x-validation-error>
                  </div>
                  <div class="form-group">
                    <x-form-label for="inputAddress2" content="image"></x-form-label>
                    <input type="text" name="img" class="form-control" id="inputAddress2"  placeholder=" fe-home ">
                        <x-validation-error name='img'></x-validation-error>
                  </div>
                  <div class="form-group">
                    <x-form-label for="inputAddress3" content="description"></x-form-label>
                    <textarea name="description" class="form-control" id="inputAddress3" ></textarea>
                        <x-validation-error name='description'></x-validation-error>
                  </div>


                  <x-submit-button></x-submit-button>
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
