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

<form id="edit_teachers">
    <div class="mb-3">
        <label class="label form-label" for="">Teacher Name:</label>
        <input class="form-control" type="text" name="teacher_name" value="<?php echo $row['name']; ?>">
        <input class="form-control" type="hidden" name="teacher_id" value="<?php echo $row['id']; ?>">
    </div>
    <div class="mb-3">
        <label class="label form-label" for="">Teacher Phone:</label>
        <input class="form-control" type="text" name="teacher_phone" value="<?php echo $row['phone']; ?>">
    </div>
    <div class="mb-3">
        <label class="label form-label" for="">Teacher Email:</label>
        <input class="form-control" type="text" name="teacher_email" value="<?php echo $row['email']; ?>" disabled>
    </div>
    <div class="mb-3">
        <label class="label form-label" for="">Teacher Gender:</label>
        <input class="form-control" type="text" name="gender" value="<?php echo $row['gender']; ?>" disabled>
    </div>
    <div class="mb-3">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary">Edit Teacher</button>
    </div>
</form>