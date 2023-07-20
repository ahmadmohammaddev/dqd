@extends('general.admin_master')

@section('admin')
    <center>
        <h1>عدد أقارب الطالب هو {{ $relative_count }} </h1>
    </center>
    @if ($relative_count != 0)
        @if ($relative_count <= 2)
            @foreach ($relatives as $relative)
                <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                <center>
                    <a href="{{ route('management.student.relative.profile.show.to.edit', ['relative_id' => $relative->id, 'student_id' => $student_id]) }}"
                        class="btn btn-primary">{{ $relative->relative_fn }}</a>
                </center>
                <br /><br /><br />
            @endforeach
        @else
            <h1>يرجى مراجعة مطور النظام لوجود اكثر من 3 اقارب للطالب</h1>
        @endif
    @else
        <h1>لا يوجد أقارب مسجلين لهذا الطالب</h1>
    @endif

@endsection
