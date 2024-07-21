@extends('admin.master')

@section('title','edit-members')

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
                <form method="POST" action="{{ route("superadmin.members.update",$member) }}" enctype="multipart/form-data">
                    @csrf
                    @method('put')


                    <div class="form-group ">
                        <x-form-label for="inputAddress" content="name"></x-form-label>
                        <input type="text" name="name" class="form-control" id="inputAddress" placeholder="title" value="{{ $member->name }}">
                        <x-validation-error name='name'></x-validation-error>
                      </div>
                      <div class="form-group ">
                        <x-form-label for="inputAddresss" content="position"></x-form-label>
                        <input type="text" name="position" class="form-control" id="inputAddresss" placeholder="title" value="{{ $member->position }}">
                        <x-validation-error name='position'></x-validation-error>
                      </div>
           
                  <div class="form-group">
                    <x-form-label for="inputAddress2" content="image"></x-form-label>
                    <input type="file" name="img" class="form-control" id="inputAddress2"  placeholder=" fe-home " value="{{ $member->img }}">
                    <x-validation-error name='img'></x-validation-error>
                  </div>

                    <x-form-label for="inputAddresss3" content="facebook"></x-form-label>
                    <input type="text" name="facebook" class="form-control" id="inputAddresss3" placeholder="title" value="{{ $member->facebook }}">
                    <x-validation-error name='facebook'></x-validation-error>
                  </div>

                  @if ($member->twiter)
                  <div class="form-group">
                    <x-form-label for="inputAddresss3" content="twiter"></x-form-label>
                    <input type="text" name="twiter" class="form-control" id="inputAddresss3" placeholder="title" value="{{ $member->twiter }}">
                    <x-validation-error name='twiter'></x-validation-error>
                  </div>
                  @endif

                  @if ($member->linked_in)
                  <div class="form-group">
                    <x-form-label for="inputAddresss3" content="linked in"></x-form-label>
                    <input type="text" name="linked_in" class="form-control" id="inputAddresss3" placeholder="title" value="{{ $member->linked_in }}">
                    <x-validation-error name='linked_in'></x-validation-error>
                  </div>
                  @endif



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
