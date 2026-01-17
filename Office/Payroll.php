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

