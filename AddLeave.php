<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Leave</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .leave-form {
            background: #fff;
            padding: 25px;
            width: 400px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .leave-form h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .leave-form label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        .leave-form input,
        .leave-form select,
        .leave-form textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .leave-form textarea {
            resize: none;
            height: 80px;
        }

        .leave-form button {
            margin-top: 15px;
            width: 100%;
            padding: 10px;
            background: #16a085;
            border: none;
            color: #fff;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        .leave-form button:hover {
            background: #13856b;
        }
    </style>
</head>
<body>

<div class="leave-form">
    <h2>Add Leave</h2>

    <form action="AddLeaveProcess.php" method="post">

        <label for="emp_id">Employee ID</label>
        <input type="text" name="emp_id" id="emp_id" required>

        <label for="emp_name">Employee Name</label>
        <input type="text" name="emp_name" id="emp_name" required>

        <label for="leave_type">Leave Type</label>
        <select name="leave_type" id="leave_type" required>
            <option value="">-- Select Leave Type --</option>
            <option value="Sick Leave">Sick Leave</option>
            <option value="Casual Leave">Casual Leave</option>
            <option value="Annual Leave">Annual Leave</option>
        </select>

        <label for="department">Department</label>
        <input type="text" name="department" id="department" required>

        <label for="reason">Reason for Leave</label>
        <textarea name="reason" id="reason" required></textarea>

        <label for="start_date">Start Date</label>
        <input type="date" name="start_date" id="start_date" required>

        <label for="end_date">End Date</label>
        <input type="date" name="end_date" id="end_date" required>

        <button type="submit">Submit Leave</button>

    </form>
</div>

</body>
</html>
