@extends('general.admin_master')

@section('admin')
<meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        .quran-progress-grid {
            display: flex;
            flex-wrap: wrap;
            max-width: 600px;
            margin: 0 auto;
        }

        .row {
            display: flex;
        }

        .cell {
            flex: 1 0 20%;
            text-align: center;
            padding: 10px;
            font-weight: bold;
            border: none;
            background-color: gray;
            color: white;
            transition: background-color 0.3s ease;
        }

        .cell:hover {
            background-color: #444;
            cursor: pointer;
        }
    </style>

    <a class="badge badge-primary" href="{{ route('quran.show.student_selector') }}">عودة لملف الطلاب</a>

    <div class="quran-progress-grid">
        @for ($row = 0; $row < 5; $row++)
            <div class="row">
                @for ($col = 0; $col < 6; $col++)
                    @php
                        $partNumber = $row * 6 + $col + 1; // Calculate the part number
                        $buttonId = 'part-' . $partNumber; // Generate a unique ID for each button
                    @endphp

                    <div class="col-2">
                        <button id="{{ $buttonId }}" type="button" class="btn btn-secondary"
                            onclick="showTableContent({{ $partNumber }})">
                            الجزء . {{ $partNumber }}
                        </button>
                        &nbsp;
                    </div>
                @endfor
            </div>
        @endfor
    </div>

    <form>
        <div class="row">
            <div class="col-12">
                <!-- Recent Order Table -->
                <div class="card card-table-border-none" id="recent-orders">
                    <div class="card-header justify-content-between">
                        <h2>بيانات التسميع</h2>
                        <div class="date-range-report">
                            <a href="#" class="btn btn-secondary" onclick="exportTable()">
                                <i class="fas fa-download"></i> Export
                            </a>
                            <a href="#" class="btn btn-secondary" onclick="window.print()">
                                <i class="fas fa-print"></i> Print
                            </a>
                        </div>
                    </div>
                    <div class="card-body pt-0 pb-5">
                        <div class="table-responsive">
                            <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="from_date">من تاريخ</label>
                                        <input type="date" name="recitting_date" value="{{ Carbon\Carbon::now() }}"
                                            class="form-control" id="from_date" placeholder="Enter From Date">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="to_date">إلى تاريخ</label>
                                        <input type="date" name="recitting_date" value="{{ Carbon\Carbon::now() }}"
                                            class="form-control" id="to_date" placeholder="Enter To Date">
                                    </div>
                                </div>
                                <thead>
                                    <tr>
                                        <th>الرقم</th>
                                        <th>السورة</th>
                                        <th class="d-none d-md-table-cell">الصفحة</th>
                                        <th class="d-none d-md-table-cell">اسم المسمع</th>
                                        <th class="d-none d-md-table-cell">تاريخ التسميع</th>
                                        <th>التقييم</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="table-content">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script>
        var recitations = @json($recitations);

        function showTableContent(partNumber) {
            var startPage = (partNumber - 1) * 20 + 1;
            var endPage = startPage + 19;

            // Special cases for the last two buttons
            if (partNumber === 29) {
                startPage = 561;
                endPage = 581;
            } else if (partNumber === 30) {
                startPage = 582;
                endPage = 604;
            }

            // Update the table content based on the button clicked
            var tableContent = '';
            for (var i = 0; i < recitations.length; i++) {
                var recitation = recitations[i];
                if (recitation.page >= startPage && recitation.page <= endPage) {
                    tableContent += `
                    <tr>
                        <td>${recitation.id}</td>
                        <td><a class="text-dark" href="">${recitation.surah_name}</a></td>
                        <td class="d-none d-md-table-cell">${recitation.page}</td>
                        <td class="d-none d-md-table-cell">${recitation.staff_fn}${recitation.staff_ln}</td>
                        <td class="d-none d-md-table-cell">${recitation.recitation_date}</td>
                        <td>
                            <span class="badge ${getRecitationEvaluationBadgeClass(recitation.recitations_evaluations_id)}">
                                ${recitation.reciting_evaluation}
                            </span>
                        </td>
                    </tr>`;
                }
            }

            document.getElementById('table-content').innerHTML = tableContent;
        }

        function getRecitationEvaluationBadgeClass(evaluationId) {
            switch (evaluationId) {
                case 1:
                    return 'badge-success';
                case 2:
                    return 'badge-info';
                default:
                    return 'badge-warning';
            }
        }

        function exportTable() {
    var tableData = document.getElementById('table-content').innerHTML;

    // Get the CSRF token value
    var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    // Send the table data to the server using AJAX
    $.ajax({
        url: '{{ route("export.pdf") }}',
        method: 'POST',
        data: {
            _token: csrfToken,
            tableData: tableData
        },
        success: function(response) {
            // Handle the success response
            console.log(response);
        },
        error: function(xhr, status, error) {
            // Handle the error response
            console.error(error);
        }
    });
}

    </script>

@endsection
