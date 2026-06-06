@extends('general.admin_master')
<Style>

    .card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  border-radius: 5px; /* 5px rounded corners */
}

/* Add rounded corners to the top left and the top right corner of the image */
img {
  border-radius: 4px;
  width: 15%;
}
    /* Add more .circle-circle-N styles as needed */
</style>
@section('admin')
@include('quran.components.attendance_student_flash')

<div class="container">
        @foreach ($groups as $group)
        <div class="card">
            <div class="row">
                <div class="col-xs">
                    <img src="{{ asset('backend/assets/images/book.png') }}" alt="Avatar">
                </div>

                <div class="col-xs">
                    <a href="{{ route('management.attendance.show.students', ['id' => $group->id , 'date' => now()->format('Y-m-d')] ) }}">
                        <h4><b>                {{ $group->group_name }}
                        </b></h4>
                       </a>
                </div>
            </div>
          </div>
        @endforeach
</div>
@endsection
{{--
 --}}


