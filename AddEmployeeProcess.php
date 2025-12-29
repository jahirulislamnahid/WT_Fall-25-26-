<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // If employees array does not exist, create it
    if (!isset($_SESSION["employees"])) {
        $_SESSION["employees"] = [];
    }

    // New employee data
    $newEmployee = [
        "username"   => $_POST["username"],
        "firstname"  => $_POST["firstname"],
        "lastname"   => $_POST["lastname"],
        "email"      => $_POST["email"],
        "department" => $_POST["department"],
        "salary"     => $_POST["salary"],
        "dob"        => $_POST["dob"],
        "experience" => $_POST["experience"]
    ];

    // Add employee to array
    $_SESSION["employees"][] = $newEmployee;

    header("Location: EmployeeDashboard.php");
    exit();
}
