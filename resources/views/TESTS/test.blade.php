@extends('general.admin_master')

@section('quran_adding_options')
    <h1>HI</h1>
    <h1>HI</h1>
    <h1>HI</h1>
    <h1>HI</h1>
    <h1>HI</h1>
    <h1>HI</h1>
@endsection
<link href="{{ asset('backend/assets/css/quran.css') }}" rel="stylesheet">

@section('admin')
    <!-- Form Type Selector -->
    <div id="formTypeSelector">
        <h3>يرجى اختيار نوع الإضافة</h3>
        <select id="formType">
            <option value="form1">إضافة خلية واحدة</option>
            <option value="form2">إضافة مجموعة خلايا</option>
            <option value="form3">إضافة سورة او مجموعة سور</option>
        </select>
    </div>






    <form id="combinedForm">
        @csrf
        <!-- Common Fields -->
        <div id="commonFields">
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






        </div>


        <!-- Form 1: One Cell -->
        <div id="form1" class="formSection">


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
        </div>

        <!-- Form 2: Many Cells -->
        <div id="form2" class="formSection">

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="surah_1">اسم السورة لخلية البداية</label>
                    <select id="surah_1" name="surah_name_selector_1" class="form-control">
                        <option value="0" disabled selected>...يرجى الأختيار</option>
                        @foreach ($surahs_info as $surah)
                            <option value={{ $surah->id }}>
                                {{ $surah->surah_name }}
                        @endforeach
                    </select>
                </div>


                <div class="form-group col-md-6">
                    <label for="page_number_1">رقم الصفحة لخلية البداية</label>
                    <select id="page_number_1" name="page_number_selector_1" class="form-control">
                    </select>
                </div>
            </div>


            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="surah_2">اسم السورة لخلية النهاية</label>
                    <select id="surah_2" name="surah_name_selector_2" class="form-control">
                        <option value="0" disabled selected>...يرجى الأختيار</option>
                        @foreach ($surahs_info as $surah)
                            <option value={{ $surah->id }}>
                                {{ $surah->surah_name }}
                        @endforeach
                    </select>
                </div>


                <div class="form-group col-md-6">
                    <label for="page_number_2">رقم الصفحة لخلية النهاية</label>
                    <select id="page_number_2" name="page_number_selector_2" class="form-control">
                    </select>
                </div>
            </div>
        </div>

        <!-- Form 3: Many Surahs -->
        <div id="form3" class="formSection">

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="surah">اسم السورة</label>
                    <select style="height:600px;" id="surah" name="surah_name_selector[]" class="form-control" multiple>
                        @foreach ($surahs_info as $surah)
                            <option value={{ $surah->id }}>
                                {{ $surah->surah_name }}
                        @endforeach
                    </select>
                </div>



            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">


                <label for="evaluation">تقييم التسميع</label>
                <select id="evaluation" name="evaluation_selector" class="form-control" name="evaluation_viewer"
                    value="1">
                    <option value={{ $recitations_evaluations[1]->id }} selected>
                        {{ $recitations_evaluations[1]->reciting_evaluation }}</option>
                    @foreach ($recitations_evaluations as $evaluations)
                        <option value={{ $evaluations->id }}>
                            {{ $evaluations->reciting_evaluation }}
                    @endforeach
                </select>
            </div>



            <div class="form-group col-md-6">
                <label for="exampleInputEmail1">Date</label>
                <input type="date" name="recitting_date" value="{{ Carbon\Carbon::now()->format('Y-m-d') }}"
                    class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Page">
            </div>


        </div>




        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="reciever_name">أسم المسمع</label>
                <select id="reciever_name_viewer" name="reciever_name_selector" class="form-control">
                    <option selected>...يرجى الأختيار</option>
                    @foreach ($staff_reciever as $reciever)
                        <option value={{ $reciever->id }}>
                            {{ $reciever->staff_fn . ' ' . $reciever->staff_ln }}
                    @endforeach
                </select>
            </div>

            <button type="submit" id="submitForm">إرسال</button>


    </form>


    <script src="{{ asset('backend/assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


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


    <script>
        function search_in_surahs(surah_id, all_surahs) {
            for (let i = 0; i < all_surahs.length; i++) {
                if (all_surahs[i].id == surah_id) {
                    return all_surahs[i];
                }
            }
        }

        $(document).ready(function() {

            $('#page_number_1').append(
                `<option value="0" disabled selected>  يرجى اختيار اسم السورة أولاَ</option>`);
            $('#surah_1').on('change', function() {
                let id = $(this).val();
                $('#page_number_1').empty();
                var quran_surahs_object = {!! json_encode($surahs_info) !!};
                var chosen_surah = search_in_surahs(id, quran_surahs_object);

                let i = chosen_surah.start_from_page;
                while (i <= chosen_surah.end_in_page) {
                    console.log(i);
                    $('#page_number_1').append(`<option value=${i}>${i}</option>`);
                    i++;
                }

            });


            $('#page_number_2').append(
                `<option value="0" disabled selected>  يرجى اختيار اسم السورة أولاَ</option>`);
            $('#surah_2').on('change', function() {
                let id = $(this).val();
                $('#page_number_2').empty();
                var quran_surahs_object = {!! json_encode($surahs_info) !!};
                var chosen_surah = search_in_surahs(id, quran_surahs_object);

                let i = chosen_surah.start_from_page;
                while (i <= chosen_surah.end_in_page) {
                    console.log(i);
                    $('#page_number_2').append(`<option value=${i}>${i}</option>`);
                    i++;
                }

            });

        });
    </script>


    <script>
        $(document).ready(function() {
            // Hide all form sections except for Form 1
            $('.formSection').not('#form1').hide();

            // Show the selected form based on the dropdown selection
            $('#formType').on('change', function() {
                var selectedForm = $(this).val();
                $('.formSection').hide(); // Hide all form sections
                $('#' + selectedForm).show(); // Show the selected form section

                // Change the submit button text based on the selected form
                switch (selectedForm) {
                    case 'form1':
                        $('#submitForm').text('إرسال الخلية');
                        break;
                    case 'form2':
                        $('#submitForm').text('إرسال المجموعة');
                        break;
                    case 'form3':
                        $('#submitForm').text('إرسال السورة');
                        break;
                }
            });

            // Submit Form
            $('#combinedForm').on('submit', function(e) {
                e.preventDefault(); // Prevent the default form submission

                var form = $(this); // Get the form
                var formData = form.serialize();
                var actionUrl = getActionUrl(form.attr('id'));

                updateForm(formData, actionUrl);
            });

            // Function to get the action URL based on the form ID
            function getActionUrl(formId) {
                switch (formId) {
                    case 'form1':
                        return '{{ route('sss') }}';
                    case 'form2':
                        return '{{ route('sss') }}';
                    case 'form3':
                        return '{{ route('sss') }}';
                    default:
                        return '#';
                }
            }

            // Function to update the form via AJAX
            function updateForm(formData, actionUrl) {
                $.ajax({
                    url: actionUrl,
                    type: 'POST',
                    data: formData,
                    success: function(response) {
                        // Update the form with the response data
                        $('#combinedForm').html(response);
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            }
        });
    </script>
@endsection

