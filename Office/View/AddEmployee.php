<!DOCTYPE html>
<html>
<head>
    <title>Add New Employee</title>
    <link rel="stylesheet" href="../css/AddEmployee.css">
</head>
<body>

<div class="content">
    <h2>Add New Employee</h2>

    <form class="employee-form" method="POST" action="../PHP/AddEmployeeProcess.php">

        <label>Username</label>
        <input type="text" name="username" required>

        <label>First Name</label>
        <input type="text" name="firstname" required>

        <label>Last Name</label>
        <input type="text" name="lastname" required>

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Department</label>
        <select name="department" required>
            <option value="">Select Department</option>
            <option value="HR">HR</option>
            <option value="IT and Technology">IT and Technology</option>
            <option value="Finance">Finance</option>
            <option value="Software">Software</option>
        </select>

        <label>Salary</label>
        <input type="number" name="salary" min="0" required>

        <label>Date of Birth</label>
        <input type="date" name="dob" required>

        <label>Experience (Years)</label>
        <input type="number" name="experience" min="0" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <label>Confirm Password</label>
        <input type="password" name="confirmPassword" required>

        <button type="submit" class="submit-btn">Submit</button>

    </form>
</div>

</body>
</html>
