<?php
include "db.php";

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $departmentName = trim($_POST["department"] ?? "");

    if ($departmentName === "") {
        $error = "Department name is required!";
    } else {

        /* OPTIONAL: prevent duplicate department */
        $check = mysqli_query(
            $conn,
            "SELECT * FROM departments WHERE department_name='$departmentName'"
        );

        if (mysqli_num_rows($check) > 0) {
            $error = "Department already exists!";
        } else {
            mysqli_query(
                $conn,
                "INSERT INTO departments (department_name)
                 VALUES ('$departmentName')"
            );

            header("Location: Departments.php");
            exit();
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Department</title>
    <link rel="stylesheet" href="Adddepartment.css">
</head>

<body>

<form method="post" class="department-form">
    <h2>Add New Department</h2>

    <?php if ($error): ?>
        <p style="color:red;"><?= $error ?></p>
    <?php endif; ?>

    <input type="text" name="department" required>

    <button type="submit">+ Add this as New Department</button>
</form>

</body>
</html>




