<?php
include "db.php";

session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

$resultEmp = mysqli_query($conn, "SELECT COUNT(*) AS total FROM employees");
$rowEmp = mysqli_fetch_assoc($resultEmp);
$totalEmployees = $rowEmp['total'] ?? 0;

$resultDept = mysqli_query($conn, "SELECT COUNT(*) AS total FROM departments");
$rowDept = mysqli_fetch_assoc($resultDept);
$totalDepartments = $rowDept['total'] ?? 0;

$today = date("y-m-d");
$resultOnLeave = mysqli_query($conn, "
    SELECT COUNT(*) AS total
    FROM leaves
    WHERE status='Approved'
    AND start_date <= '$today'
    AND end_date  >= '$today'
");
$rowOnLeave = mysqli_fetch_assoc($resultOnLeave);
$onLeaveToday = $rowOnLeave['total'] ?? 0;

$resultPending = mysqli_query($conn, "SELECT COUNT(*) AS total FROM leaves WHERE status='pending'");
$rowPending = mysqli_fetch_assoc($resultPending);
$pendingApprovals = $rowPending['total'] ?? 0;

$resultApproved = mysqli_query($conn, "SELECT COUNT(*) AS total FROM leaves WHERE status='Approved'");
$rowApproved = mysqli_fetch_assoc($resultApproved);
$totalApprovedLeaves = $rowApproved['total'] ?? 0;


$resultapprovedPayroll = mysqli_query($conn, "
     SELECT COUNT(*) AS total
     FROM payroll
     WHERE status = 'paid'

");
$rowapprovedPayroll = mysqli_fetch_assoc($resultapprovedPayroll);
$approvedPayrolls = $rowapprovedPayroll['total'] ?? 0;

?>


<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
     <link rel="stylesheet" href="dashboard.CSS">
</head>
<body>


<div class="container">

    <aside class="sidebar">
        <h2 class="logo">Neurobyte<br>Technologies<br>LTD</h2>
        <ul>
            <div class="top-actions">
            <li class="active">Dashboard</li>
            <li>
            <a href="EmployeeDashboard.php">Employee</a>
            </li>
            <li>
            <a href="Departments.php">Departments</a>
            </li>
             <li>
            <a href="ManageLeaves.php">Maange Leave</a>
            </li>
            <li>
            <a href="Payroll.php">Payroll</a>
            </li>
            <li>Attendance</li>
            <li>Announcements</li>
            </div>
        </ul>
    </aside>

    <main class="main">

        <header class="topbar">
            <p>Welcome, <b><?php echo $_SESSION["username"]; ?></b></p>

            <h2>Here whats happening with your team today</h2>
            <div class="top-actions">
                <a href="AddEmployee.php">
                <button class="btn add">+ Add New Employee</button>
                </a>
                <a href="logout.php">
                <button class="btn logout">Logout</button>
                </a>
                <a href="homepage.php">
                <button class="btn home">Home</button>
                </a>
            </div>
        </header>

        <section class="cards">
            <div class="card orange">
            <h3>Total Employees</h3>
            <p style="font-size:28px; font-weight:bold;">
                <?php echo $totalEmployees; ?>
            </div>

            <div class="card purple">
                <h3>On Leave Today</h3>
             <p>   <?= $onLeaveToday ?> </p>
            </div>

            <div class="card green">
    <h3>Total Departments</h3>
    <p><?= $totalDepartments ?></p>
</div>


            <div class="card blue">
                <h3>Pending Approvals</h3>
                <p><?= $pendingApprovals ?></p>
            </div>
        </section>

        <section class="small-cards">
            <div class="small-card">
                <h4>Pending Payrolls</h4>
                <p>0</p>
            </div>

            <div class="small-card">
                <h4>Total Announcements</h4>
                <p>0</p>
            </div>

            <div class="small-card">
                <h4>Approved Leave</h4>
                <p><?= $totalApprovedLeaves ?></p>
            </div>

            <div class="small-card">
                <h4>Approved Payrolls</h4>
                <p><?= $approvedPayrolls?></p>
            </div>
        </section>

    </main>
</div>

</body>
</html>
