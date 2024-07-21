@extends('admin.master')

@section('title','features')


@section('content')

<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">

            <div class="row align-items-center mb-2">
                <div class="col">
                  <h2 class="h5 page-title">{{ __('keywords.features') }}!</h2>
                </div>
                <div class="col-auto">
                    {{-- <a href="{{ route("superadmin.features.create") }}" class="btn btn-primary float-right">Add New</a> --}}
                    <x-action-button :route="route('superadmin.features.create')" color="primary" dir="float-right" content="Add_New" ></x-action-button>
                </div>
              </div>

          <div class="row">
            <!-- simple table -->
            <div class="col my-4">
              <div class="card shadow">
                <div class="card-body">

                    <x-success-alert></x-success-alert>

                  @if (count($features))
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>{{ __('keywords.id') }}</th>
                        <th>{{ __('keywords.title') }}</th>
                        <th style="width:40%;">{{ __('keywords.description') }}</th>
                        <th>{{ __('keywords.icon') }}</th>
                        <th>{{ __('keywords.action') }}</th>
                      </tr>
                    </thead>
                    <tbody>
                     @foreach ($features as $feature)
                     <tr>
                        <td> {{ $loop->index+1  }}</td>
                        <td> {{ $feature->title }}</td>
                        <td> {{ $feature->description }}</td>
                        <td> {{ $feature->img }}</td>
                        <td>
                            <x-action-button :route="route('superadmin.features.show',$feature)" dir="" color="success" content='show' ></x-action-button>
                            <x-action-button :route="route('superadmin.features.edit',$feature)" dir="" color="primary" content='edit' ></x-action-button>

                            <x-delete-component name="features" :model="$feature"></x-delete-component>
                        </td>
                      </tr>
                     @endforeach
                    </tbody>
                  </table>
                  @else
                     <x-empty-alert></x-empty-alert>
                  @endif


                </div>
              </div>
            </div> <!-- simple table -->

          </div> <!-- end section -->

          <div>
            {{ $features->links() }}
          </div>




        </div> <!-- .col-12 -->
      </div> <!-- .row -->
    </div> <!-- .container-fluid -->

  </main> <!-- main -->



@endsection


{{-- <script>
    function confirmSubmit(event) {
        event.preventDefault(); // Prevent the form from submitting immediately

        if (confirm("Are you sure you want to delete this element?")) {

            event.target.submit();
        }
    }
</script> --}}
