@extends('admin.master')

@section('title','settings')


@section('content')


<style>
    .file-input-container {
        position: relative;
        display: inline-block;
    }
    .file-input {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        cursor: pointer;
    }
</style>

<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-10 col-xl-8">
          <h2 class="h3 mb-4 page-title">Settings</h2>
          <div class="my-4">
            {{-- <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Security</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Notifications</a>
              </li>
            </ul> --}}
            <form action="{{ route("superadmin.settings.update",$setting) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method("put")
              <div class="row mt-5 align-items-center">
                <div class="col-md-3 text-center mb-5">
                  {{-- <div class="avatar avatar-xl">
                    <img src="{{ asset('storage/settings/' . $setting->img) }}" alt="..." class="avatar-img rounded-circle">
                  </div> --}}


                  <div class="file-input-container avatar avatar-xl">
                    <img src="{{ asset('storage/settings/' . $setting->img) }}" id="blah" alt="..."  class="avatar-img  rounded-circle">
                    <input type="file" name="img" class="file-input" id="hiddenFileInput" onchange="readURL(this);"  accept="image/*">
                 </div>




                </div>
                <div class="col">
                  <div class="row align-items-center">
                    <div class="col-md-7">
                      <h4 class="mb-1">{{ $setting->name }}, {{ $setting->secondname }}</h4>
                      <p class="small mb-3"><span class="badge badge-dark">{{ $setting->address }}</span></p>
                    </div>
                  </div>
                  <div class="row mb-4">
                    <div class="col-md-7">
                      <p class="text-muted"> {{ $setting->description }} </p>
                    </div>
                    <div class="col">
                      <p class="small mb-0 text-muted">Nec Urna Suscipit Ltd</p>
                      <p class="small mb-0 text-muted">P.O. Box 464, 5975 Eget Avenue</p>
                      <p class="small mb-0 text-muted">(537) 315-1481</p>
                    </div>
                  </div>
                </div>
              </div>
              <hr class="my-4">
              <x-success-alert></x-success-alert>
              <div class="form-row">

                <div class="form-group col-md-6">
                  <label for="firstname">{{ __("keywords.firstname") }}</label>
                  <input type="text" name="name" id="firstname" class="form-control" placeholder="Brown" value="{{ $setting->name }}">
                  <x-validation-error name="name"></x-validation-error>
                </div>
                <div class="form-group col-md-6">
                  <label for="lastname">{{ __("keywords.lastname") }}</label>
                  <input type="text" id="lastname" name="secondname" class="form-control" placeholder="Asher" value="{{ $setting->secondname }}">
                  <x-validation-error name="secondname"></x-validation-error>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail4">{{ __("keywords.email") }}</label>
                <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="brown@asher.me" value="{{ $setting->email }}">
                <x-validation-error name="email"></x-validation-error>
              </div>
              <div class="form-group">
                <label for="inputAddress5">{{ __("keywords.address") }}</label>
                <input type="text" name="address" class="form-control" id="inputAddress5" placeholder="P.O. Box 464, 5975 Eget Avenue" value="{{ $setting->address }}">
                <x-validation-error name="address"></x-validation-error>
              </div>

              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="inputCompany6">{{ __("keywords.facebook") }}</label>
                  <input type="text" name="facebook" class="form-control" id="inputCompany6" placeholder="http://example.facebook.com" value="{{ $setting->facebook }}">
                  <x-validation-error name="facebook"></x-validation-error>
                </div>
                <div class="form-group col-md-4">
                  <label for="inputState7"> {{ __("keywords.linked_in") }}</label>
                  <input type="text" name="linked_in" class="form-control" id="inputCompany7" placeholder="http://example.linkedin.com" value="{{ $setting->linked_in }}">
                  <x-validation-error name="linked_in"></x-validation-error>
                </div>
                <div class="form-group col-md-4">
                  <label for="inputZip8">{{ __("keywords.twiter") }}</label>
                  <input type="text" name="twiter" class="form-control" id="inputZip8"  value="{{ $setting->twiter }}">
                  <x-validation-error name="twiter"></x-validation-error>
                </div>

              </div>

              <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="inputZip9">{{ __("keywords.instagram") }}</label>
                  <input type="text" name="instagram" class="form-control" id="inputZip9" value="{{ $setting->instagram }}">
                  <x-validation-error name="instagram"></x-validation-error>
                </div>
                <div class="form-group col-md-4">
                  <label for="inputZip99">{{ __("keywords.github") }}</label>
                  <input type="text" name="github" class="form-control" id="inputZip99"  value="{{ $setting->github }}">
                  <x-validation-error name="github"></x-validation-error>
                </div>
                <div class="form-group col-md-4">
                  <label for="inputZip999">{{ __("keywords.youtube") }}</label>
                  <input type="text" name="youtube" class="form-control" id="inputZip999"  value="{{ $setting->youtube }}">
                  <x-validation-error name="youtube"></x-validation-error>
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputCompany5">{{ __("keywords.company") }}</label>
                  <input type="text" name="company" class="form-control" id="inputCompany5" placeholder="Nec Urna Suscipit Ltd" value="{{ $setting->company }}">
                  <x-validation-error name="company"></x-validation-error>
                </div>
                <div class="form-group col-md-4">
                  <label for="inputState6">{{ __("keywords.state") }}</label>
                  <input type="text" name="state" class="form-control" id="inputCompany6" placeholder="egypt" value="{{ $setting->state }}">
                  <x-validation-error name="state"></x-validation-error>
                </div>
                <div class="form-group col-md-2">
                  <label for="inputZip5">{{ __("keywords.zip") }}</label>
                  <input type="text" name="zip" class="form-control" id="inputZip5" placeholder="98232" value="{{ $setting->zip }}">
                  <x-validation-error name="zip"></x-validation-error>
                </div>
              </div>

              <hr class="my-4">
              <div class="row mb-4">
                <div class="col-md-6">
                  {{-- <div class="form-group">
                    <label for="inputPassword4"> Password</label>
                    <input type="password" class="form-control" id="inputPassword5">
                  </div> --}}
                </div>
              </div>
              {{-- <button type="submit" class="btn btn-primary">Save Change</button> --}}
              <x-submit-button></x-submit-button>
            </form>
          </div> <!-- /.card-body -->
        </div> <!-- /.col-12 -->
      </div> <!-- .row -->
    </div> <!-- .container-fluid -->

  </main>



  @endsection


{{-- <script>
    function confirmSubmit(event) {
        event.preventDefault(); // Prevent the form from submitting immediately

        if (confirm("Are you sure you want to delete this element?")) {

            event.target.submit();
        }
    }
</script> --}}



<script>
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $('#blah').attr('src', e.target.result).width(150).height(200);
    };

    reader.readAsDataURL(input.files[0]);
  }
}
</script>
