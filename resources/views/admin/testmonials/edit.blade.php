@extends('admin.master')

@section('title','edit-testmonials')

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
                <form method="POST" action="{{ route("superadmin.testmonials.update",$testmonial) }}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                  <div class="form-group">
                    <x-form-label for="inputAddress" content="name"></x-form-label>
                    <input type="text" name="name" class="form-control" id="inputAddress" placeholder="title" value="{{ $testmonial->name }}">
                    <x-validation-error name='name'></x-validation-error>
                  </div>
                  <div class="form-group">
                    <x-form-label for="inputAddresss" content="position"></x-form-label>
                    <input type="text" name="position" class="form-control" id="inputAddresss" placeholder="title" value="{{ $testmonial->position }}">
                    <x-validation-error name='position'></x-validation-error>
                  </div>
                  <div class="form-group">
                    <x-form-label for="inputAddress2" content="image"></x-form-label>
                    <input type="file" name="img" class="form-control" id="inputAddress2"  placeholder=" fe-home " value="{{ $testmonial->img }}">
                    <x-validation-error name='img'></x-validation-error>
                  </div>
                  <div class="form-group">
                    <x-form-label for="inputAddress3" content="description"></x-form-label>
                    <textarea name="description" class="form-control" id="inputAddress3" >{{ $testmonial->description }}</textarea>

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
