<?php
session_start();


if (!isset($_SESSION["username"])) {
    header("Location:login.php");
    exit();
}

$totalEmployees = isset($_SESSION["employees"])
    ? count($_SESSION["employees"])
    : 0;
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
            <li class="active">Dashboard</li>
            <li>
            <a href="EmployeeDashboard.php">Employees</a>
            </li>
            <li>Departments</li>
            <li>Leave Management</li>
            <li>Payroll</li>
            <li>Attendance</li>
            <li>Announcements</li>
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
            </div>

            <div class="card green">
                <h3>Total Departments</h3>
            </div>

            <div class="card blue">
                <h3>Pending Approvals</h3>
            </div>
        </section>

        <section class="small-cards">
            <div class="small-card">
                <h4>Present Today</h4>
                <p>0</p>
            </div>

            <div class="small-card">
                <h4>Total Announcements</h4>
                <p>0</p>
            </div>

            <div class="small-card">
                <h4>Approved Leave</h4>
                <p>0</p>
            </div>

            <div class="small-card">
                <h4>Pending Payrolls</h4>
                <p>0</p>
            </div>
        </section>

    </main>
</div>

</body>
</html>
