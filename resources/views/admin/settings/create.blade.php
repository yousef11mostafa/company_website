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

                <div class="form-row">
                    <div class="form-group col-6">
                        <x-form-label for="inputAddress" content="name"></x-form-label>
                        <input type="text" name="name" class="form-control" id="inputAddress" placeholder="name">
                            <x-validation-error name='name'></x-validation-error>
                      </div>
                      <div class="form-group col-6 ">
                        <x-form-label for="inputAddress" content="position"></x-form-label>
                        <input type="text" name="position" class="form-control" id="inputAddress" placeholder="position">
                            <x-validation-error name='position'></x-validation-error>
                      </div>
                </div>


                  <div class="form-group">
                    <x-form-label for="inputAddress2" content="image"></x-form-label>
                    <input type="file" name="img" class="form-control" id="inputAddress2"  placeholder=" image ">
                        <x-validation-error name='img'></x-validation-error>
                  </div>
                  <div class="form-group">
                    <x-form-label for="inputAddress4" content="facebook"></x-form-label>
                    <input type="text" name="facebook" class="form-control" id="inputAddress4" placeholder="facebook">
                        <x-validation-error name='facebook'></x-validation-error>
                  </div>
                  <div class="form-group">
                    <x-form-label for="inputAddress5" content="twiter"></x-form-label>
                    <input type="text" name="twiter" class="form-control" id="inputAddress5" placeholder="twiter">
                        <x-validation-error name='twiter'></x-validation-error>
                  </div>
                  <div class="form-group">
                    <x-form-label for="inputAddress6" content="linked_in"></x-form-label>
                    <input type="text" name="linked_in" class="form-control" id="inputAddress6" placeholder="linked_in">
                        <x-validation-error name='linked_in'></x-validation-error>
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
