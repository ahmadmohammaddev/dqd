  {{-- Message --}}
  @if (Session::has('success'))
  <div class="alert alert-success alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert">
          <i class="fa fa-times"></i>
      </button>
      <center>
        <h1 style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;">{{ session('success') }}</h1>
    </center>


  </div>
@endif

@if (Session::has('error'))
  <div class="alert alert-danger alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert">
          <i class="fa fa-times"></i>
      </button>
      <strong>Error !</strong> {{ session('error') }}
  </div>
@endif
