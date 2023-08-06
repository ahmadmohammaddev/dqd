@extends('admin.admin_master')
@section('admin')
    <div class="row">
        <div class="col-md-6" style="left:30%;margin-top:5%">





            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 style="padding:10px" class="title">Recitting Records</h4>

                        </div>



                        <div class="card-body">
                            <table class="table table-bordered table-condensed " style="text-align: center">
                                @php
                                    $i = 1;
                                    $res=0;
                                    $Ex = "Excellent";
                                    $VeryG = "Very Good";
                                    $Good = "Good";
                                    $Fa = "Failed";
                                @endphp
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Surah Name</th>
                                        <th scope="col">Page</th>
                                        <th scope="col">Evaluation</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Reciever</th>
                                        <th scope="col">Edit</th>





                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($studet_recitting as $record)
                                        @if ($record->evaluation == 1)
                                            @php $record->evaluation = $Ex @endphp
                                        @elseif($record->evaluation == 2)
                                        @php $record->evaluation = $VeryG @endphp
                                        @elseif($record->evaluation == 3)
                                           @php $record->evaluation = $Good @endphp
                                            @else{{ $record->evaluation = $Fa }}
                                        @endif

                                        <tr>


                                            <th scope="row">{{ $i++ }}</th>
                                            <td>{{ $record->student_name }}</td>
                                            <td>{{ $record->surah_name }}</td>
                                            <td>{{ $record->page_number }}</td>
                                            <td>{{ $record->evaluation }}</td>
                                            <td>{{ $record->recitting_date }}</td>
                                            <td>{{ $record ->page_percentage}}</td>
                                            <td>Later</td>

                                        </tr>



                                        @php
                                        if( $record->evaluation = $Ex)$res+=5*$record ->page_percentage;
                                        else if($record->evaluation = $VeryG )$res+=3*$record ->page_percentage;
                                        else if( $record->evaluation = $Good )$res+=2*$record ->page_percentage;
                                        @endphp
                                    @endforeach




                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <h1>{{ ceil($res) }}</h1>
    </div>
@endsection
