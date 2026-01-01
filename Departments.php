<?php
session_start();
$departments = $_SESSION["departments"] ?? [];
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Departments </title>
        <link rel="stylesheet" href="department.CSS">
</head>

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
        <a href="Adddepartment.php" class="btn add">+ Add New Department </a>
</header>
    
    <table class="employee-table">
        <thead>
            <tr>
                <h2> here are the Department Details</h2>
                <th>Department Name</th>
                <th>Action</th>
            </tr>
        </thead>
    </tbody>    
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
