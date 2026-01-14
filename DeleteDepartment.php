<?php
include "db.php";
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (!isset($_POST["department_name"])) {
        header("Location: Departments.php");
        exit();
    }

    $department = mysqli_real_escape_string($conn, $_POST["department_name"]);

    mysqli_query(
        $conn,
        "DELETE FROM departments WHERE department_name='$department'"
    );

    header("Location: Departments.php");
    exit();
}

header("Location: Departments.php");
exit();

