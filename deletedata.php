<?php
    require_once("dbcon.php");

    $techer_id = $_POST['Id'];

    $delete_query = "DELETE FROM teachers
    WHERE id = $techer_id";

    $query_run = $conn->query($delete_query);

    if($query_run){
        echo "Data Deleted Successfully";
    }
    else{
        echo "Data Delete Unsuccessfull";
    }






    $conn->close();

?>