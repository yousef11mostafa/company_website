@extends('admin.master')

@section('title','members')


@section('content')

<main role="main" class="main-content">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-12">

            <div class="row align-items-center mb-2">
                <div class="col">
                  <h2 class="h5 page-title">{{ __('keywords.members') }}!</h2>
                </div>
                <div class="col-auto">
                    {{-- <a href="{{ route("superadmin.members.create") }}" class="btn btn-primary float-right">Add New</a> --}}
                    <x-action-button :route="route('superadmin.members.create')" color="primary" dir="float-right" content="Add_New" ></x-action-button>
                </div>
              </div>

          <div class="row">
            <!-- simple table -->
            <div class="col my-4">
              <div class="card shadow">
                <div class="card-body">

                    <x-success-alert></x-success-alert>

                  @if (count($members))
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>{{ __('keywords.id') }}</th>
                        <th>{{ __('keywords.name') }}</th>
                        <th>{{ __('keywords.position') }}</th>
                        <th style="width:40%;">{{ __('keywords.facebook') }}</th>
                        <th>{{ __('keywords.image') }}</th>
                        <th>{{ __('keywords.action') }}</th>
                      </tr>
                    </thead>
                    <tbody>
                     @foreach ($members as $member)
                     <tr>
                        <td> {{ $loop->index+1  }}</td>
                        <td> {{ $member->name }}</td>
                        <td> {{ $member->position }}</td>
                        <td>
                             <div>{{ $member->facebook }}</div>
                             <div> {{ $member->linked_in }}</div>
                             <div> {{ $member->twiter }}</div>




                             </td>
                        <td>
                            @if($member && $member->img)

                            <img src="{{ asset('storage/members/' . $member->img) }}" alt="Testimonial Image" style="width:60px;border-radius:10%;">
                            @else
                            <p>No image found.</p>
                        @endif

                        </td>
                        <td>
                            <x-action-button :route="route('superadmin.members.show',$member)" dir="" color="success" content='show' ></x-action-button>
                            <x-action-button :route="route('superadmin.members.edit',$member)" dir="" color="primary" content='edit' ></x-action-button>

                            <x-delete-component name="members" :model="$member"></x-delete-component>
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
            {{ $members->links() }}
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
