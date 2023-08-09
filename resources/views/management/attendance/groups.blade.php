@extends('general.admin_master')
<Style>
    .circle-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .circle {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100px;
        height: 100px;
        border-radius: 50%;
        margin: 10px;
        font-size: 18px;
        font-weight: bold;
        color: white;
        background-color: #3490dc;
    }

    .circle.circle-2 {
        background-color: #3c94e7;
    }

    .circle.circle-3 {
        background-color: #1f3b77;
    }

    .circle.circle-4 {
        background-color: #1f59b1;
    }

    .circle.circle-5 {
        background-color: #5a1ac2;
    }

    /* Add more .circle-circle-N styles as needed */
</style>
@section('admin')
    <div class="circle-container">
        @foreach ($groups as $group)
            <a href="{{ route('management.attendance.show.students', ['id' => $group->id]) }}" class="circle circle-{{ $loop->index + 1 }}">
                {{ $group->group_name }}
            </a>
        @endforeach
    </div>
@endsection
