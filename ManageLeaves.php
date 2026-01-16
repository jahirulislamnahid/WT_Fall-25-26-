<?php
include "db.php";

// Approve
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['approve_emp_id'])) {
    $emp_id = $_POST['approve_emp_id'];
    mysqli_query($conn, "UPDATE leaves SET status='Approved' WHERE emp_id='$emp_id'");
}

// Delete 
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['delete_emp_id'])) {
    $emp_id = $_POST['delete_emp_id'];
    mysqli_query($conn, "DELETE FROM leaves WHERE emp_id='$emp_id'");
}

// see leaves from database to my webpage
$result = mysqli_query($conn, "
    SELECT emp_id, emp_name, leave_type, department, start_date, end_date, status
    FROM leaves
    ORDER BY emp_id ASC
");

if (!$result) {
    die("Database query failed: " .mysqli_error($conn));
}

$leaves = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Leave Management</title>
    <link rel="stylesheet" href="ManageLeaves.CSS?v=1.0">
</head>

<body>
<div class="container">
    <aside class="sidebar">
        <h2 class="logo">Neurobyte <br> Technologies <br> LTD</h2>
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
            <h2>Leave Requests</h2>

            <table class="employee-table">
                <thead>
                    <tr>
                        <th>Serial No</th>
                        <th>Emp ID</th>
                        <th>Name</th>
                        <th>Leave Type</th>
                        <th>Department</th>
                        <th>Days</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                <?php if (!empty($leaves)): ?>
                    <?php foreach ($leaves as $i => $leave): ?>
                        <?php
                            $days = (int)((strtotime($leave['end_date']) - strtotime($leave['start_date'])) / (60*60*24) + 1);
                        ?>
                        <tr>
                            <td><?= $i + 1 ?></td>
                            <td><?= htmlspecialchars($leave['emp_id']) ?></td>
                            <td><?= htmlspecialchars($leave['emp_name']) ?></td>
                            <td><?= htmlspecialchars($leave['leave_type']) ?></td>
                            <td><?= htmlspecialchars($leave['department']) ?></td>
                            <td><?= $days ?></td>
                            <td>
                                <?php if ($leave['status'] === 'Pending'): ?>
                                    <form method="POST" style="display:inline;">
                                        <input type="hidden" name="approve_emp_id" value="<?= $leave['emp_id'] ?>">
                                        <button type="submit" class="btn-pending">Approve</button>
                                    </form>
                                <?php else: ?>
                                    <span class="approved">Approved</span>
                                <?php endif; ?>

                                <form method="POST" style="display:inline;">
                                    <input type="hidden" name="delete_emp_id" value="<?= $leave['emp_id'] ?>">
                                    <button type="submit" class="btn-delete"
                                            onclick="return confirm('Are you sure you want to delete this leave?')">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="7" style="text-align:center;color:#777;">No leaves found.</td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </main>
</div>
</body>
</html>
