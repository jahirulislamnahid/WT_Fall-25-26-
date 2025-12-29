<DOCTYPE html>
<html>
<head>
    <title>Add New Employee</title>
    <link rel="stylesheet" href="AddEmployeeCSS.php">
    <script src="AddEmployeeValidationJS.php"></script>
</head>
<body>

<div class="content">
    <h2>Add New Employee</h2>

    <form class="employee-form"
          method="POST"
          action="AddEmployeeProcess.php"
          onsubmit="return validateForm();">

        Username
        <input type="text" id="username" name="username">

        First Name
        <input type="text" id="firstname" name="firstname">

        Last Name
        <input type="text" id="lastname" name="lastname">

        Email Address
        <input type="email" id="email" name="email">

        Department
        <select id="department" name="department">
            <option value="">Select Department</option>
            <option>HR</option>
            <option>IT And Technology</option>
            <option>Finance</option>
            <option>Software</option>
        </select>

        Salary
        <input type="number" id="salary" name="salary">

        Date of Birth
        <input type="date" id="dob" name="dob">

        Working Experience
        <input type="number" id="experience" name="experience">

        Password
        <input type="password" id="password">

        Confirm Password
        <input type="password" id="confirmPassword">

        <!-- ✅ SUBMIT BUTTON -->
        <button type="submit" class="submit-btn">Submit</button>

    </form>
</div>

</body>
</html>




     