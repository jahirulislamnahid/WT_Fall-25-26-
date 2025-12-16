<!DOCTYPE html>
<html>
<head>

    <title>Employee Dashboard</title>
     <link rel="stylesheet" href="Employee.css">
</head>
<body>

    <div class="container">

    <!-- Sidebar -->
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

    <!-- Main Content -->
    <main class="main">

        <!-- Top Bar -->
        <header class="topbar">
            <h2> Hello, Admin </h2>
            <h2 class="word">Here Are Employee Details </h2>
            <div class="top-actions">
                <button class="btn add">+ Add New Employee</button>
                <button class="btn logout">Logout</button>
            </div>
        </header>

        <div class="employee-table-container">
            <h2> Emplyee Information</h2>

            <table class=" employee-table">
                <thead>
                    <tr>
                        <th> Employee ID </th>
                        <th> Name </th>
                        <th> Joining year </th>
                        <th> Department </th>
                        <th> Experience (years) </th>
                        <th> Address </th>
                        <th> Company Achievements </th>
                    </tr>
</thead>
            <tbody>
            <tr>
                <td>EMP-001</td>
                <td>Rahim Uddin</td>
                <td>2021</td>
                <td>IT</td>
                <td>3</td>
                <td>Dhaka</td>
                <td>Best Performer 2023</td>
            </tr>

            <tbody>
            <tr>
                <td>EMP-002</td>
                <td>Bkash Ahamed</td>
                <td>2023</td>
                <td>Finance and Accounting</td>
                <td>2</td>
                <td>Dhaka</td>
                <td>Employee of the year 2025</td>
            </tr>
</tbody>
</table>
</div>

</body>
</html>




