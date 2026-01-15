<?php
include "db.php";

$department = $_GET["name"] ?? null; 

if (!$department) {
    header("Location: Departments.php");
    exit();
}

$result = mysqli_query(
    $conn,
    "SELECT * FROM departments WHERE department_name='$department'"
);

if (mysqli_num_rows($result) === 0) {
    header("Location: Departments.php");
    exit();
}
$dept = mysqli_fetch_assoc($result);

//update dept
if ($_SERVER["REQUEST_METHOD"] === "POST")  {
    $newDepartment = $_POST["department"];

    $newDepartmentEscaped = mysqli_real_escape_string($conn, $newDepartment);
    $departmentEscaped = mysqli_real_escape_string($conn, $department);

    mysqli_query(
        $conn,
        "UPDATE departments
        SET department_name = '$newDepartmentEscaped'
        WHERE department_name = '$departmentEscaped'"
    );

    header("Location: Departments.php");
    exit();
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Department</title>
    <link rel="stylesheet" href="EditDepartment.css">
</head>

<body>

<form method="post" class="edit-form">

    <h2>Edit Department</h2>

    <input type="text"
           name="department"
           value="<?= htmlspecialchars($dept["department_name"]) ?>"
           required>

    <button type="submit">Update Department</button>

</form>

</body>
</html>
