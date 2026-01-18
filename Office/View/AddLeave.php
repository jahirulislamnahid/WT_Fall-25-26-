<!DOCTYPE html>
<html>
<head>
    <title>Add Leave</title>
    <link rel="stylesheet" href="../css/AddLeave.CSS">
    <script src="AddLeave.js"></script>
</head>
<body>
    

<div class="leave-form">
    <h2>Add Leave</h2>
    <form action="../PHP/AddLeaveProcess.php" method="post" onsubmit="return validateForm();">
        Employee ID
        <input type="text" name="emp_id" id="emp_id" required>

        Employee Name
        <input type="text" name="emp_name" id="emp_name" required>

        Leave Type
        <select name="leave_type" id="leave_type" required>
            <option value=""> Select Leave type </option>
            <option value="Sick Leave">Sick Leave</option>
            <option value="casual Leave">Casual Leave</option>
            <option value="Annual Leave">Annual Leave</option>
        </select>

        Department
        <input type="text" name="department" id="department" required>

        Reason for Leave
        <textarea name="reason" id="reason" required></textarea>

        Start Date
        <input type="date" name="start_date" id="start_date" required>

        End Date
        <input type="date" name="end_date" id="end_date" required>

        <button type="submit">Submit Leave</button>
    </form>
</div>

</body>
</html>
