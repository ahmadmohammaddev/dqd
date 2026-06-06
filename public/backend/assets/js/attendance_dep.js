function takingOrShowingAttendance() {

    $(document).ready(function () {
        let x = document.getElementById('takingOrShowingAttendanceSwitch').checked;
        if (x === true) {
            document.getElementById('takingAttendanceForm').style.display = "initial";
            document.getElementById('showinAttendanceForm').style.display = "none";

        } else {
            document.getElementById('takingAttendanceForm').style.display = "none";
            document.getElementById('showinAttendanceForm').style.display = "initial";
        }
    });


}

function onChangeDate() {
    document.getElementById('editDateButton').style.color = '#' + Math.floor(Math.random() * 16777215).toString(16);
    ajaxUrl = 'http://127.0.0.1:8000/test';
    date = document.getElementById('dynamicAttendanceDate').value;
    group_id = document.getElementById('group_id').value;

    $.ajax({
        type: "GET",
        url: ajaxUrl,
        data: { group_id: group_id, date: date, },

        success: function (response, status, XHR) {
            //console.log("the response is : " + response);
            const $tableBody = document.getElementById('attendanceTableBody');
            const $trElement = document.createElement('tr');

            const $tdElementStudentName = document.createElement('td');
            const $tdElementStudentTime = document.createElement('td');
            const $tdElementStudentCheckbox = document.createElement('td');

            response.forEach(studentObject => {
                $tdElementStudentName.textContent = studentObject.student_fn + " " + studentObject.student_ln;
                $tdElementStudentTime.textContent = studentObject.arrival_time;

                $tableBody.appendChild($trElement);
                $trElement.appendChild($tdElementStudentName);
                $trElement.appendChild($tdElementStudentTime);

                $tableBody.innerHTML = `
            <td>
                <center>
                    <h3>` + studentObject.student_fn + `</h3>
                </center>
            </td>`;



            });



        },
        error: function (XHR, status, error) {
            console.log("the error is : " + error);
        }
    })
}

function checkAttendanceEditing() {
    let checkBoxes = document.querySelectorAll(".checkbox-input-2");
    checkBoxes.forEach(function (checkbox) {
        console.log(checkbox.value);

    });


}

