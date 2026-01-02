<?php
session_start();

if (!isset($_SESSION['leaves']) || !is_array($_SESSION['leaves'])) {
    $_SESSION['leaves'] = [];
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Leave Management </title>
        <link rel="stylesheet" href="Employee.css">
</head>

<body>

<div class="container">
    <aside class="sidebar">
        <h2 class="logo">Neurobye <br> Technologies <br> LTD</h2>
    <ul>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="EmployeeDashboard.php">Employees</a></li>
        <li><a href="Departments.php">Departments</a></li>
        <li class="active">Leave Management</li>
        <li>Payroll</li>
            <li>Attendance</li>
            <li>Announcements</li>
        </ul>
</aside>

<main class="main">
    <header class="topbar">
        <div>
            <h2>Hello, Admin</h2>
            <p class="word">Manage Employee Leaves</p>
</div>

<div class="top-actions">

                <a href="AddLeave.php" class="btn add">+ Add Leave</a>
                <a href="logout.php" class="btn logout">Logout</a>
            </div>
        </header>

        <div class="employee-table-container">
            <h2>Leave Request</h2>

            <table class="employee-table">
                <thead>
                    <tr>
                        <th> Serial No</th>
                        <th> Emp ID</th>
                        <th> Name</th>
                        <th> Leave type</th>
                        <th> Department</th>
                        <th> Days</th>
                        <th> status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($_SESSION['leaves'])): ?>
                        <?php foreach ($_SESSION['leaves'] as $i => $leave): ?>
                            <tr>
                                <td><?= $i + 1 ?></td>
                            <td><?= ($leave['emp_id']) ?></td>
                            <td><?= ($leave['emp_name']) ?></td>
                            <td><?= ($leave['leave_type']) ?></td>
                            <td><?= ($leave['department']) ?></td>
                            <td><?= ($leave['days']) ?></td>

                             <td>
                                <form action="UpdateLeaveStatus.php" method="post">
                                    <input type="hidden" name="index" value="<?= $i ?>">
                                    <input type="hidden" name="status" value="Approved">

                                    <button
                                        class="btn <?= $leave['status'] == 'Approved' ? 'approved' : 'pending' ?>"
                                        <?= $leave['status'] == 'Approved' ? 'disabled' : '' ?>>
                                        <?= $leave['status'] ?>
                                    </button>
                        </form>
                        </td>
                        </tr>

                        <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="7" style="text-align:center;color:#777;">
                                    No Leave found now 
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
