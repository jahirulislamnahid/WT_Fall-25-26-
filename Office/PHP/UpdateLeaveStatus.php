<?php
include "db.php";


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $leave_id = $_POST['leave_id'];
    $status   = $_POST['status'];

    $sql = "UPDATE leaves SET status='$status' WHERE id='$leave_id'";
    if (mysqli_query($conn, $sql)) {
        header("Location: ManageLeaves.php");
        exit();
    }
    else {
        echo "Error Updating leave: " . mysqli_error($conn); 
    }
}
?>
