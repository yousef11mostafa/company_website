@extends('admin.master')

@section('title','edit-messages')

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
                <form method="POST" action="{{ route("superadmin.messages.update",$message) }}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                  <div class="form-group">
                    <x-form-label for="inputAddress" content="name"></x-form-label>
                    <input type="text" name="name" class="form-control" id="inputAddress" placeholder="name" value="{{ $message->name }}">
                    <x-validation-error name='name'></x-validation-error>
                  </div>
                  <div class="form-group">
                    <x-form-label for="inputAddress2" content="email"></x-form-label>
                    <input type="text" name="email" class="form-control" id="inputAddress2"  placeholder=" fe-home " value="{{ $message->email }}">
                    <x-validation-error name='email'></x-validation-error>
                  </div>
                  <div class="form-group">
                    <x-form-label for="inputAddress2" content="subject"></x-form-label>
                    <input type="text" name="subject" class="form-control" id="inputAddress2"  placeholder="fe-subject " value="{{ $message->subject }}">
                    <x-validation-error name='subject'></x-validation-error>
                  </div>
                  <div class="form-group">
                    <x-form-label for="inputAddress3" content="message"></x-form-label>
                    <textarea name="message" class="form-control" id="inputAddress3" >{{ $message->message }}</textarea>
                        <x-validation-error name='message'></x-validation-error>
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
