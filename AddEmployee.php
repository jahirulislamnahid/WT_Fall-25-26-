<DOCTYPE html>
<head>
    <title>Add New Employee</title>
    <link rel="stylesheet" href="AddEmployeeCSS.php">
    <script src="AddEmployeeValidationJS.php"></script>
</head>
<body>


    <div class="content">
        <h2> Add new Employee </h2>

        <form class="employee-form" onsubmit="return validateForm();">
            <div class="form-group">
                username
                <input type="text" id="username">
                Firstname
                <input type="text" id="firstname">
                Last Name
                <input type="text" id="lastname">
                Email Address 
                <input type="email" id="email">
                Departments
                <select id="department">
                    <option> Select Department </option>
                    <option> HR </option>
                    <option> IT And Technology </option>
                    <option> Finance </option>
                    <option> Software </option>
                </select>
                Salary
                <input type="number">
                Date of birth
                <input type="date">
                Working Experience
                <input type="number">
                PASSWORD
                <input type="password" id="password">
                Confirm PASSWORD
                <input type="password" id="confirmPassword">

                <button type="submit" class="submit-btn"> Submit</button>
</form>
<div>
</body>
</html>



     