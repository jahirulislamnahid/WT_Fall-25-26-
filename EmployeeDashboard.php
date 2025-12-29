<?php
session_start();
$employees = $_SESSION["employees"] ?? [];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee Dashboard</title>
    <link rel="stylesheet" href="Employee.css">
</head>
<body>

<div class="container">

    <aside class="sidebar">
        <h2 class="logo">Neurobyte<br>Technologies<br>LTD</h2>
        <ul>
            <li>Dashboard</li>
            <li class="active">Employees</li>
            <li>Departments</li>
            <li>Leave Management</li>
            <li>Payroll</li>
            <li>Attendance</li>
            <li>Announcements</li>
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
                        <th>Employee ID</th>
                        <th>Name</th>
                        <th>Joining Year</th>
                        <th>Department</th>
                        <th>Experience (Years)</th>
                        <th>Email</th>
                        <th>Salary</th>
                    </tr>
                </thead>

                <tbody>
                    <!-- Static Employees -->
                    <tr>
                        <td>EMP-001</td>
                        <td>Rahim Uddin</td>
                        <td>2021</td>
                        <td>IT</td>
                        <td>3</td>
                        <td>rahim@gmail.com</td>
                        <td>50,000</td>
                    </tr>

                    <tr>
                        <td>EMP-002</td>
                        <td>Bkash Ahamed</td>
                        <td>2023</td>
                        <td>Finance</td>
                        <td>2</td>
                        <td>bkash@gmail.com</td>
                        <td>45,000</td>
                    </tr>

                    <!-- Dynamic Employee from Form -->
                    


        </div>

    </main>
</div>

</body>
</html>





