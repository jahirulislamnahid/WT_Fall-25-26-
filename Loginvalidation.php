<?php

$adminID = $password = "";
$adminError = $passError = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Admin ID validation
    if (empty($_POST["adminID"])) {
        $adminError = "Admin ID is required";
    } else {
        $adminID = trim($_POST["adminID"]);
    }

    // Password validation
    if (empty($_POST["password"])) {
        $passError = "Password is required";
    } else {
        $password = trim($_POST["password"]);

        if (strlen($password) < 6) {
            $passError = "Password must be at least 6 characters";
        }
    }

    // Success case
    if ($adminError == "" && $passError == "") {
        $success = "Login Successful!";
    }
}

// If there are errors → show alert and go back
if ($adminError != "" || $passError != "") {
    $msg = $adminError . "\\n" . $passError;  // show both errors if exist
    echo "
    <script>
        alert('$msg');
        window.location.href='admin_login.php';
    </script>
    ";
    exit();
}

// If success → show success alert
if ($success != "") {
    echo "
    <script>
        alert('$success');
        window.location.href='admin_dashboard.php'; // or admin_login.php
    </script>
    ";
}
?>
