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
