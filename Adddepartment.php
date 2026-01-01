<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (!isset($_SESSION["departments"])) {
        $_SESSION["departments"] = [];
    }

    $departmentName = trim($_POST["department"]);

    if ($departmentName !== " " ) {
        $_SESSION["departments"][] = [
            "name" => $departmentName
        ];
    }

    header("Location: Departments.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Add Department </title>
        <link rel="stylesheet" href="Adddepartment.css">
</head>
<body>

<form method="post" class="department-form">
    <h2> Add New Department </h2>
    <input type="text" name="department" >
    <button type="submit"> + Add tis as New Department </button>
</form>
</body>
</html>





