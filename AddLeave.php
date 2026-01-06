
<!DOCTYPE html>
<head>
    <title>Add Leave</title>
    <link rel="stylesheet" href="AddLeave.CSS">


</head>
<body>

<div class="leave-form">
    <h2>Add Leave</h2>

    <form action="AddLeaveProcess.php" method="post" onsubmit="return validateForm();">

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
