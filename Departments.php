<?php
include "db.php";
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

/* FETCH DEPARTMENTS FROM DATABASE */
$result = mysqli_query(
    $conn,
    "SELECT * FROM departments ORDER BY department_name ASC"
);

if (!$result) {
    die("Database query failed: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Departments</title>
    <link rel="stylesheet" href="department.CSS">
</head>

<body>

<div class="container">
    <aside class="sidebar">
        <h2 class="logo">Neurobyte<br>Technologies<br>LTD</h2>
        <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="EmployeeDashboard.php">Employees</a></li>
            <li class="active">Departments</li>
            <li>Leave Management</li>
            <li>Payroll</li>
            <li>Attendance</li>
            <li>Announcements</li>
        </ul>
    </aside>

    <main class="main">

        <header class="topbar">
            <a href="Adddepartment.php" class="btn add">+ Add New Department</a>
        </header>

        <table class="employee-table">
            <thead>
                <tr>
                    <th>Department Name</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
            <?php if (mysqli_num_rows($result) > 0): ?>
                <?php while ($dept = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?= htmlspecialchars($dept["department_name"]) ?></td>
                    <td>
                        <a href="EditDepartment.php?name=<?= urlencode($dept["department_name"]) ?>"
                           class="btn edit">Edit</a>

                        <form method="post" action="DeleteDepartment.php" style="display:inline;">
                            <input type="hidden" name="department_name"
                                   value="<?= htmlspecialchars($dept["department_name"]) ?>">
                            <button type="submit"
                                    onclick="return confirm('Delete this department?');"
                                    class="btn delete">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="2" style="text-align:center;">No departments found</td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>

    </main>
</div>

</body>
</html>
