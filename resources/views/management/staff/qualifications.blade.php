@extends('general.admin_master')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@section('admin')
    <x-staff_sidebar_choices satff_id="{{ $staff_info->id }}"/>
    @include('general.components.flash')

<div class="container">
    <h1>Staff Qualifications</h1>
    <table>
        <thead>
            <tr>
                <th>Staff Name</th>
                <th>Qualification Type</th>
                <!-- Add more table headers if needed -->
            </tr>
        </thead>
        <tbody>
            @foreach ($staff_qualifications as $qualification)
                <tr>
                    <td>{{ $qualification->staff_fn }} {{ $qualification->staff_ln }}</td>
                    <td>{{ $qualification->qualification_type }}</td>
                    <!-- Display more qualification information if needed -->
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
