<?php
include "db.php";

if (isset($_POST['create_announcement'])) {

$title = $_POST['title'];

$uploadDir = "uploads/";
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

$fileName = time() . "_" . $FILES['pdf']['name'];
$filePath = $uploadDir . $fileName;

move_uploaded_file($_FILES['pdf']['tmp_name'], $filePath);

mysqli_query($conn, "
    INSERT INTO announcemnets (title, file_path)
    VALUES ('$title', '$filePath')

  ");

  header("Location: " . $_SERVER['PHP_SELF']);
  exit;
}

$result = mysqli_query($conn, "
    SELECT * FROM announcements
    ORDER BY id DESC

");

$announcements = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Announcements</title>
        <link rel="stylesheet" href="announce.css">
    </head>
<body>
    <div class="container">

    <aside class="sidebar">
        <h2 class="logo">Neurobyte<br>Technologies<br>LTD</h2>
        <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="EmployeeDashboard.php">Employees</a></li>
            <li><a href="Departments.php">Departments</a></li>
            <li><a href="ManageLeaves.php">Leave Management</a></li>
            <li><a href="Payroll.php">Payroll</a></li>
            <li class="active">Announcement</li>
        </ul>
    </aside>

    <main class="main">
        <header class="topbar">
            <h2>Announcements</h2>
        </header>
        
        <div class="form-box">
            <form mathod="POST">
                Title 
                <input type="text" name="title" required>
                Upload file
                <input type="file" name="pdf" accept="application/pdf" required>

                <button class="btn" type="submit" name="create_announcement"> Publish</button>
            </form> 
            </div>

