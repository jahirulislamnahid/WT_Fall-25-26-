<?php
session_start();

$adminID = $_POST['adminID'];
$password = $_POST['password'];

if ($adminID === "admin" && $password === "1234") {

    
    $_SESSION['admin'] = $adminID;

    header("Location: dashboard.php");
    exit();

} else {
    echo "<script>
        alert('Invalid Admin ID or Password');
        window.location.href = 'login.php';
    </script>";
}
?>
