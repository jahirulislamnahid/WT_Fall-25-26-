<?php
include "db.php";
include "AddEmployeeValidation.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username   = trim($_POST["username"]);
    $firstname  = trim($_POST["firstname"]);
    $lastname   = trim($_POST["lastname"]);
    $email      = trim($_POST["email"]);
    $department = $_POST["department"];
    $salary     = $_POST["salary"];
    $dob        = $_POST["dob"];
    $experience = $_POST["experience"];
    $password   = $_POST["password"];
    $confirmPwd = $_POST["confirmPassword"];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO employees
            (username, firstname, lastname, email, department, salary, dob, experience, password)
            VALUES
            ('$username', '$firstname', '$lastname', '$email', '$department',
             '$salary', '$dob', '$experience', '$hashedPassword')";

    if (mysqli_query($conn, $sql)) {
        header("Location: EmployeeDashboard.php");
        exit();
    } else {
        die("Error inserting employee: " . mysqli_error($conn));
    }
}
?>
