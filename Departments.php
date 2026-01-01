<?php
session_start();
$departments = $_SESSION["departments"] ?? [];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Departments</title>
    <link rel="stylesheet" href="Employee.css">
</head>
<body>

<div class="container">

    <!-- Sidebar -->
    <aside class="sidebar">
        <h2 class="logo">Neurobyte<br>Technologies<br>LTD</h2>
        <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="EmployeeDashboard.php">Employees</a></li>
            <li class="active">Departments</li>
        </ul>
    </aside>

    <!-- Main -->
    <main class="main">

        <header class="topbar">
            <h2>View Departments</h2>
            <a href="AddDepartment.php" class="btn add">+ Add New Department</a>
        </header>

        <table class="employee-table">
            <thead>
                <tr>
                    <th>Department Name</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
            <?php if (!empty($departments)): ?>
                <?php foreach ($departments as $index => $dept): ?>
                <tr>
                    <td><?= htmlspecialchars($dept["name"]) ?></td>
                    <td>
                        <a href="EditDepartment.php?index=<?= $index ?>" class="btn edit">Edit</a>

                        <form method="post" action="DeleteDepartment.php" style="display:inline;">
                            <input type="hidden" name="index" value="<?= $index ?>">
                            <button type="submit"
                                onclick="return confirm('Delete this department?');"
                                class="btn delete">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
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
