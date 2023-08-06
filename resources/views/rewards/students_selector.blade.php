@extends('general.admin_master')




@section('admin')
    <h1 style="-: 0px">اختر الحلقة ثم اسم الطالب</h1>
    <form id="one_cell_form" method="POST" action="{{ route('students.points.student.show') }}">
        @csrf

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
                <select id="student_name" name="student_id" class="form-control">
                </select>
            </div>


        </div>










        <button type="submit" id="submit_student_id" class="btn btn-primary">ارسال</button>
        <script src="{{ asset('backend/assets/plugins/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('backend/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


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
                            return {
                                id: student.id,
                                name: name
                            };
                        }
                    });

                    sortedStudents.sort(function(a, b) {
                        let nameA = a.name.toUpperCase();
                        let nameB = b.name.toUpperCase();
                        return (nameA < nameB) ? -1 : (nameA > nameB) ? 1 : 0;
                    });

                    sortedStudents.forEach(function(student) {
                        $('#student_name').append(
                            `<option value="${student.id}">${student.name}</option>`);
                    });
                });
            });
        </script>



    </form>
@endsection
