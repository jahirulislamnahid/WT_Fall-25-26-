<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Ensure session array exists
    if (!isset($_SESSION["leaves"])) {
        $_SESSION["leaves"] = [];
    }

    // Create new leave record
    $newLeave = [
        "emp_id"     => $_POST["emp_id"],
        "emp_name"   => $_POST["emp_name"],
        "leave_type" => $_POST["leave_type"],
        "department" => $_POST["department"],
        "reason"     => $_POST["reason"],
        "start_date" => $_POST["start_date"],
        "end_date"   => $_POST["end_date"],
        "days"       => (int)((strtotime($_POST["end_date"]) - strtotime($_POST["start_date"])) / (60 * 60 * 24) + 1),
        "status"     => "Pending"
    ];

    // Add leave to session array
    $_SESSION["leaves"][] = $newLeave;

    // Redirect to manage leaves dashboard
    header("Location: ManageLeaves.php");
    exit();
}
