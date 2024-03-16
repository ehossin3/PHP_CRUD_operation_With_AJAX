<?php

require_once("dbcon.php");

$select_query = "SELECT * FROM teachers
ORDER BY id DESC";

$query_run = $conn->query($select_query);

    if($query_run->num_rows > 0)
    {
        while($row = $query_run->fetch_assoc()){
        
        ?>
        
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['phone'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['gender'] ?></td>
            <td>
                <button id="edit-btn"   type="button" value="<?php echo $row['id'] ?>" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editData">Edit</button>
                <button id="view-btn"   type="button" value="<?php echo $row['id'] ?>" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#viewData">View</button>
                <button id="delete-btn" type="button" value="<?php echo $row['id'] ?>" class="btn btn-danger">Delete</button>
            </td>
        </tr>
        
        <?php

        }
    } else
    {
        echo "No teacher found";
    }

    $conn->close();
?>