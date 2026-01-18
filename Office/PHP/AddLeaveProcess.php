<?php
include "../Model/db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $emp_id     = $_POST["emp_id"];
    $emp_name   = $_POST["emp_name"];
    $leave_type = $_POST["leave_type"];
    $department = $_POST["department"];
    $reason     = $_POST["reason"];
    $start_date = $_POST["start_date"];
    $end_date   = $_POST["end_date"];

    $days =(int)(($end_date - $start_date) / (60*60*24) +1);

    $sql = "INSERT INTO leaves (emp_id, emp_name, leave_type, department, reason, start_date, end_date, days, status)
            VALUES ('$emp_id', '$emp_name', '$leave_type', '$department', '$reason', '$start_date', '$end_date', '$days', 'Pending')";

    if (mysqli_query($conn, $sql)) {
        header("Location: ../View/ManageLeaves.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
