<?php
include "db.php";

// Crrate payroll insert into the database
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['create_payroll'])) {
    $emp_name = $_POST['emp_name'];
    $salary = $_POST['salary'];
    $start = $_POST['period_start'];
    $end = $_POST['period_end'];

    $query = mysqli_query($conn, "
            INSERT INTO payroll (emp_name, salary, period_start, period_end, status)
            VALUES ('$emp_name', '$salary', '$start', '$end', 'Pending')
    ");


}

// process the payment
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['process_emp'])) {
    $emp_name = $_POST['process_emp'];

    $query = mysqli_query($conn, "
            UPDATE payroll
            SET status = 'paid'
            WHERE emp_name='$emp_name' AND ststus='Pending'
            LIMIT 1
    ");
}

// fetch payroll from the database to my web
 
$result = mysqli_query($conn, "
        SELECT emp_name, salary, period_start, period_end, status
        FROM payroll 
        ORDER BY id DESC 

   ");
if (!$result) {
    die("Database query failed: " .mysqli_error($conn));
}
$payrolls = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Payroll </title>
        <link rel="stylesheet" href="Payroll.css">
</head>

<body>
    <div class="container">
        <aside class="sidebar">
            <h2 class="logo">Neurobyte<br>Technologies<br>LTD</h2>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="EmployeeDashboard.php">Employees</a><li>
                <li><a href="Departments.php">Departments</a><li>
                <li><a href="ManageLeaves.php">Leave Management</a></li>
                <li class="active">Payroll</li>
            </ul>
         </aside>    
         
         <main class ="main">
            <header class="topbar">
                <h2> Payroll Management</h2>
            </header>

        <div class="form-box">
            <h3> Create Payroll </h3>
            <form method="POST">
                Employee name
                <input type="text" name="emp_name" placeholder="Employee Name" required>
                Salary
                <input type="number" name="salary" placeholder="Employee Name" required>
                Starting Period
                <input type="date" name="period_start" required>
                Ending Period
                <input type="date" name="period_end" required>

                <button class="btn" type="submit" name="create_payroll">Create Payroll</button>
            </form>
            </div>

            <div class="employee-table-container">
                <h3> Payroll Records </h3>

                <table class="employee-table">
                    <thead>
                        <tr>
                            <th>Serial No</th>
                            <th>Employee name</th>
                            <th>Salary</th>
                            <th>Period</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>    
                </thead>

      