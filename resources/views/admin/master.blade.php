
@php
$direction=request()->segment(1)=="en"?'':'rtl';
@endphp


  @include('admin.particels.head')

  <body class="vertical  light  {{$direction}}  ">

    <div class="wrapper">

      @include('admin.particels.navbar')


      @include('admin.particels.sidebar')


      @yield('content')

    </div> <!-- .wrapper -->




    @include('admin.particels.scripts')

  </body>
</html>


<script>
    function confirmSubmit(event) {
        event.preventDefault(); // Prevent the form from submitting immediately

        if (confirm("Are you sure you want to delete this element?")) {

            event.target.submit();
        }
    }
</script>
