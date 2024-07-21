@if (session('success'))
    @php
    $x=session('success');
    @endphp
<div class="alert alert-warning alert-dismissible fade show" role="alert">
       {{ __("keywords.$x") }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif
