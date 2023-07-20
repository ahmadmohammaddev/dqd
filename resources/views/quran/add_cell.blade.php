@extends('general.admin_master')




@section('quran_adding_options')
    <h1>HI</h1>
    <h1>HI</h1>
    <h1>HI</h1>
    <h1>HI</h1>
    <h1>HI</h1>
    <h1>HI</h1>
@endsection


@section('admin')
    <h1 style="-: 0px">إضافة خلية واحدة</h1>
    <form id="one_cell_form" method="POST" action="{{ route('quran.post_one_cell') }}">
        @csrf

        @include('quran.components.flash')

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="groups_names">الحلقة</label>
                <select id="groups_names" name="" class="form-control">
                    <option value="0" disabled selected>...يرجى الأختيار</option>
                    @foreach ($groups_names as $group_name)
                        <option value={{ $group_name->id }}>
                            {{ $group_name->group_name }}
                    @endforeach
                </select>
            </div>

            <div class="form-group col-md-6">
                <label for="student_name">أسم الطالب</label>
                <select id="student_name" name="student_name_selector" class="form-control">
                </select>
            </div>


        </div>


        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="surah">اسم السورة</label>
                <select id="surah" name="surah_name_selector" class="form-control">
                    <option value="0" disabled selected>...يرجى الأختيار</option>
                    @foreach ($surahs_info as $surah)
                        <option value={{ $surah->id }}>
                            {{ $surah->surah_name }}
                    @endforeach
                </select>
            </div>


            <div class="form-group col-md-6">
                <label for="page_number">رقم الصفحة</label>
                <select id="page_number" name="page_number_selector" class="form-control">
                </select>
            </div>
        </div>



        <div class="form-row">
            <div class="form-group col-md-6">


                <label for="evaluation">تقييم التسميع</label>
                <select id="evaluation" name="evaluation_selector" class="form-control" name="evaluation_viewer"
                    value="1">
                    <option  value={{ $recitations_evaluations[1]->id }} selected>{{ $recitations_evaluations[1]->reciting_evaluation }}</option>
                    @foreach ($recitations_evaluations as $evaluations)
                        <option value={{ $evaluations->id }}>
                            {{ $evaluations->reciting_evaluation }}
                    @endforeach
                </select>
            </div>



            <div class="form-group col-md-6">
                <label for="exampleInputEmail1">Date</label>
                <input type="date" name="recitting_date" value="{{ Carbon\Carbon::now()->format('Y-m-d') }}"
                class="form-control"
                    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Page">
            </div>


        </div>




        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="reciever_name">أسم المسمع</label>
                <select id="reciever_name_viewer" name="reciever_name_selector" class="form-control">
                    <option selected>...يرجى الأختيار</option>
                    @foreach ($staff_reciever as $reciever)
                        <option value={{ $reciever->id }}>
                            {{ $reciever->staff_fn . ' ' . $reciever->staff_ln   }}
                    @endforeach
                </select>
            </div>

            <div class="form-check col-md-3">
                <center>
                    <input class="form-check-input" type="hidden" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">

                    </label>
                </center>
            </div>
            <div class="form-check col-md-3">
                <center>
                    <input class="form-check-input" type="hidden" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">

                    </label>
                </center>
            </div>
        </div>







        <button type="submit" id="submit_for_one_cell" class="btn btn-primary">إضافة</button>
        <script src="{{ asset('backend/assets/plugins/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('backend/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


        <script>
            function search_in_surahs(surah_id, all_surahs) {
                for (let i = 0; i < all_surahs.length; i++) {
                    if (all_surahs[i].id == surah_id) {
                        return all_surahs[i];
                    }
                }
            }

            $(document).ready(function() {

                $('#page_number').append(`<option value="0" disabled selected>  يرجى اختيار اسم السورة أولاَ</option>`);
                $('#surah').on('change', function() {
                    let id = $(this).val();
                    $('#page_number').empty();
                    var quran_surahs_object = {!! json_encode($surahs_info) !!};
                    var chosen_surah = search_in_surahs(id, quran_surahs_object);

                    let i = chosen_surah.start_from_page;
                    while (i <= chosen_surah.end_in_page) {
                        console.log(i);
                        $('#page_number').append(`<option value=${i}>${i}</option>`);
                        i++;
                    }

                });
            });
        </script>



<script>
    $(document).ready(function() {
        $('#student_name').append(`<option value="0" disabled selected>Please select a group first</option>`);
        $('#groups_names').on('change', function() {
            let id = $(this).val(); // Get chosen group's ID
            $('#student_name').empty();
            let students_groups_object = {!! json_encode($students_groups) !!};
            let students_names_object = {!! json_encode($students_names) !!};

            let selectedStudents = students_groups_object.filter(function(studentGroup) {
                return studentGroup.groups_id == id;
            });

            let sortedStudents = selectedStudents.map(function(studentGroup) {
                let student = students_names_object.find(function(student) {
                    return student.id == studentGroup.students_id;
                });

                if (student) {
                    let name = student.student_fn + " " + student.student_ln;
                    return { id: student.id, name: name };
                }
            });

            sortedStudents.sort(function(a, b) {
                let nameA = a.name.toUpperCase();
                let nameB = b.name.toUpperCase();
                return (nameA < nameB) ? -1 : (nameA > nameB) ? 1 : 0;
            });

            sortedStudents.forEach(function(student) {
                $('#student_name').append(`<option value="${student.id}">${student.name}</option>`);
            });
        });
    });
</script>



    </form>



    @include('quran.components.adding_options')
@endsection
