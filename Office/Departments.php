<?php
include "db.php";

$result = mysqli_query($conn, "SELECT * FROM departments ORDER BY department_name ASC");
if (!$result) {
    die("Database Query failed: " . mysqli_error($conn));
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Departments</title>
    <link rel="stylesheet" href="department.CSS">
</head>
<body>

<div class="container">
    <aside class="sidebar">
        <h2 class="logo">Neurobyte<br>Technologies<br>LTD</h2>
        <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="EmployeeDashboard.php">Employees</a></li>
            <li class="active">Departments</li>
            <li><a href="ManageLeaves.php">Manage Leave</a></li>
            <li>Payroll</li>
            <li>Attendance</li>
            <li>Announcements</li>
        </ul>
    </aside>

    <main class="main">
        <header class="topbar">
            <a href="Adddepartment.php" class="btn add">+ Add New Department</a>
        </header>

        <table class="employee-table">
            <thead>
                <tr>
                    <th>Department Name</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
            <?php if (mysqli_num_rows($result) > 0): ?>
                <?php while ($dept = mysqli_fetch_assoc($result)):
                    $rowId = md5($dept['department_name']); ?>
                    <tr id="row<?= $rowId ?>">
                        <td><?= htmlspecialchars($dept["department_name"]) ?></td>
                        <td>
                            <a href="EditDepartment.php?name=<?= urlencode($dept["department_name"]) ?>" class="btn edit">Edit</a>

                            <button type="button" class="btn delete"
                                onclick="deleteDepartment('<?= htmlspecialchars($dept['department_name']) ?>', '<?= $rowId ?>')">
                                Delete
                            </button>
                        </td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="2" style="text-align:center;">No departments found</td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
    </main>
</div>

<script>
    function deleteDepartment(department, rowId) {

       if (!confirm("Delete this department?")) {
        return;
       }

       var xhttp = new XMLHttpRequest();

       xhttp.onreadystatechange = function () {
        if(this.readyState === 4) {
            if (this.status === 200) {
                let response = this.responseText.trim();
                if (response == "success") {
                    document.getElementById("row" + rowId).remove();
                }
                else{
                    alert("Delete Failed: " + response);
                }
            }
        }
     };
     xhttp.open("POST", "DeleteDepartment.php", true);
     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
     xhttp.send("department_name=" + encodeURIComponent(department));

    }
</script>

</body>
</html>
