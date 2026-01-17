<?php
include "db.php";

if (!isset($_POST['department_name'])) {
    echo "missing";
    exit;
}

$department = mysqli_real_escape_string($conn, $_POST['department_name']);

$sql = "DELETE FROM departments WHERE department_name='$department'";

if (mysqli_query($conn, $sql)) {
    if (mysqli_affected_rows($conn) > 0) {
        echo "success";
    } else {
        echo "not_found";
    }
} else {
    echo "error";
}
?>