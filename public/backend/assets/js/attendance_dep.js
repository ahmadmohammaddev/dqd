function takingOrShowingAttendance(){
    let x = document.getElementById('takingOrShowingAttendanceSwitch').checked;
    if(x===true){
        document.getElementById('takingAttendanceForm').style.display = "initial";
        document.getElementById('showinAttendanceForm').style.display = "none";

    }else {
        document.getElementById('takingAttendanceForm').style.display = "none";
        document.getElementById('showinAttendanceForm').style.display = "initial";
    }
}

function onChangeDate(){
    document.getElementById('editDateButton').style.color = '#' + Math.floor(Math.random()*16777215).toString(16);
}

function checkAttendanceEditing(){
    let checkBoxes = document.querySelectorAll(".checkbox-input-2");
    checkBoxes.forEach(function(checkbox){
        console.log(checkbox.value);

    });


}

