<?php
include "../Model/db.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['delete_id'])) {
    $username = $_POST['delete_id'];
    mysqli_query($conn, "DELETE FROM employees WHERE username='$username'");
    header("Location: EmployeeDashboard.php");
    exit();
}

$result = mysqli_query($conn, "SELECT * FROM employees ORDER BY username ASC");
if (!$result) {
    die("Database query failed: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee Dashboard</title>
    <link rel="stylesheet" href="../css/Employee.css">
</head>
<body>
   
<div class="container">
    <aside class="sidebar">
        <h2 class="logo">Neurobyte<br>Technologies<br>LTD</h2>
        <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li class="active">Employees</li>
            <li><a href="Departments.php">Departments</a></li>
            <li><a href="ManageLeaves.php">Manage Leave</a></li>
            <li><a href="Payroll.php">Payroll</a></li>
            <li><a href="announce.php">Announcement</a></li>
        </ul>
    </aside>


    <main class="main">

        <header class="topbar">
            <div>
                <h2>Hello, Admin</h2>
                <p class="word">Here Are Employee Details</p>
            </div>

            <div class="top-actions">
                <a href="AddEmployee.php" class="btn add">+ Add New Employee</a>
                <a href="logout.php" class="btn logout">Logout</a>
            </div>
        </header>

        <div class="employee-table-container">
            <h2>Employee Information</h2>

            <table class="employee-table">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Name</th>
                        <th>Date of Birth</th>
                        <th>Department</th>
                        <th>Experience (Years)</th>
                        <th>Email</th>
                        <th>Salary</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                <?php if (mysqli_num_rows($result) > 0): ?>
                    <?php while ($emp = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><?= $emp["username"] ?></td>
                            <td><?= $emp["firstname"] . " " . $emp["lastname"] ?></td>
                            <td><?= $emp["dob"] ?></td>
                            <td><?= $emp["department"] ?></td>
                            <td><?= $emp["experience"] ?></td>
                            <td><?= $emp["email"] ?></td>
                            <td><?= $emp["salary"] ?></td>
                            <td>
                                <form method="post" action="EmployeeDashboard.php" style="display:inline;">
                                    <input type="hidden" name="delete_id" value="<?= $emp["username"] ?>">
                                    <button type="submit" class="btn delete"
                                            onclick="return confirm('Are you sure you want to delete this employee?');">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="8" style="text-align:center;color:#777;">
                            No employees found.
                        </td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>

    </main>
</div>

</body>
</html>
