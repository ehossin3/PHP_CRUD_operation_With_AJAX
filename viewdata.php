<?php
require_once("dbcon.php");

$id = $_POST['Id'];

$select_query = "SELECT * FROM teachers
WHERE id = $id";

$query_run = $conn->query($select_query);

if($query_run->num_rows > 0){

    $row = $query_run->fetch_assoc();
}



?>

<form id="view_teachers">
    <div class="mb-3">
        <label class="label form-label" for="">Teacher Name:</label>
        <input class="form-control" type="text" name="teachername" value="<?php echo $row['name']; ?>" disabled>
    </div>
    <div class="mb-3">
        <label class="label form-label" for="">Teacher Phone:</label>
        <input class="form-control" type="text" name="teacherphone" value="<?php echo $row['phone']; ?>" disabled>
    </div>
    <div class="mb-3">
        <label class="label form-label" for="">Teacher Email:</label>
        <input class="form-control" type="text" name="teacheremail" value="<?php echo $row['email']; ?>" disabled>
    </div>
    <div class="mb-3">
        <label class="label form-label" for="">Teacher Gender:</label>
        <input class="form-control" type="text" name="teac_gender" value="<?php echo $row['gender']; ?>" disabled>
    </div>
</form>