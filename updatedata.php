<?php
    require_once("dbcon.php");

    $teacher_name = $conn->real_escape_string($_POST['teacher_name']);
    $teacher_phone = $conn->real_escape_string($_POST['teacher_phone']);
    $teacher_id = $_POST['teacher_id'];

    
    $insert_query = "UPDATE teachers
    SET name = '$teacher_name', phone = '$teacher_phone'
    WHERE id = $teacher_id";


    $query_run = $conn->query($insert_query);

    if($query_run){
        echo "Teacher Updated Successfully";
    }
    else {
        echo "Teacher Update unseccessfull";
    }




    $conn->close();
?>