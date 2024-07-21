@extends('admin.master')

@section('title','messages')


@section('content')

<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">

            <div class="row align-items-center mb-2">
                <div class="col">
                  <h2 class="h5 page-title">{{ __('keywords.messages') }}!</h2>
                </div>
                <div class="col-auto">
                    {{-- <a href="{{ route("superadmin.messages.create") }}" class="btn btn-primary float-right">Add New</a> --}}
                    {{-- <x-action-button :route="route('superadmin.messages.create')" color="primary" dir="float-right" content="Add_New" ></x-action-button> --}}
                </div>
              </div>

          <div class="row">
            <!-- simple table -->
            <div class="col my-4">
              <div class="card shadow">
                <div class="card-body">

                    <x-success-alert></x-success-alert>

                  @if (count($messages))
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>{{ __('keywords.id') }}</th>
                        <th>{{ __('keywords.name') }}</th>
                        <th>{{ __('keywords.email') }}</th>
                        <th>{{ __('keywords.subject') }}</th>
                        <th style="width:30%;">{{ __('keywords.message') }}</th>
                        <th>{{ __('keywords.action') }}</th>
                      </tr>
                    </thead>
                    <tbody>
                     @foreach ($messages as $message)
                     <tr>
                        <td> {{ $loop->index+1  }}</td>
                        <td> {{ $message->name }}</td>
                        <td> {{ $message->email }}</td>
                        <td> {{ $message->subject }}</td>
                        <td> {{ $message->message }}</td>

                        <td>
                            <x-action-button :route="route('superadmin.messages.show',$message)" dir="" color="success" content='show' ></x-action-button>
                            <x-action-button :route="route('superadmin.messages.edit',$message)" dir="" color="primary" content='edit' ></x-action-button>

                            <x-delete-component name="messages" :model="$message"></x-delete-component>
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
            {{ $messages->links() }}
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
