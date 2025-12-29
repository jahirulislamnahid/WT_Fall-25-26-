<!DOCTYPE html>
<html>
    <head>
        <title> Add New Employee </title>
        <link rel="stylesheet" href="AddEmployee.css">
        <script src="AddEmployeeValidation.js"></script>
</head>
<body>

<div class="content">
    <h2> Add New Employee </h2>

    <form class="employee-form" method="POST" action="AddEmployeeProcess.php" onsubmit="return validateForm();">
        <div class="form-group">

    username
    <input type="text" id="username" name="username">
    First name
    <input type="text" id="firstname" name="firstname">
    Last name
    <input type="text" id="lastname" name="lastname">
    Email Address 
    <input type="text" id="email" name="email">
    Department
    <select id="department" name="department">
        <option value="">Select Department</option>
        <option>HR</option>
        <option>IT and Technology</option>
        <option>Finance</option>
        <option>Software</option>
</select>
    Salary
    <input type="number" id="salary" name="salary">
    Date of Birth
    <input type="date" id="dob" name="dob">
    Working Experience [Years]
    <input type="number" id="experience" name="experience">
    PASSWORD
    <input type="password" id="password">
    Confirm PASSWORD
    <input type="password" id="confirmPassword">

    <button type="submit" class="submit-btn"> Submit </button>
    </div>
</div>
</form>

</body>
</html>


