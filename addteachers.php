<?php
    require_once("dbcon.php");

    $teacher_name = $conn->real_escape_string($_POST['teacher_name']);
    $teacher_phone = $conn->real_escape_string($_POST['teacher_phone']);
    $teacher_email = $conn->real_escape_string($_POST['teacher_email']);
    $gender = $conn->real_escape_string($_POST['gender']);

    


    $insert_query = "INSERT INTO teachers(name, phone, email, gender) 
    VALUES('$teacher_name','$teacher_phone','$teacher_email','$gender')";


    $query_run = $conn->query($insert_query);

    if($query_run){
        echo "Teacher Added Successfully";
    }
    else {
        echo "Teacher add unseccessfull";
    }




    $conn->close();
?>