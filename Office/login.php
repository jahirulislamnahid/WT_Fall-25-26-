<?php
include "db.php";
session_start();

$error = "";

if (!isset($_SESSION["username"]) && isset($_COOKIE["username"]) && !isset($_COOKIE["logged_out"])) {
    $_SESSION["username"] = $_COOKIE["username"];
    header("Location: dashboard.php");
    exit();
}

if (isset($_SESSION["username"])) {
    header("Location: dashboard.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user = trim($_POST["username"]);
    $pass = trim($_POST["password"]);
    $remember = isset($_POST["remember"]);

    if (empty($user) || empty($pass)) {
        $error = "All the fields are required";
    } else {
        if ($user == "admin" && $pass == "1234") {
            $_SESSION["username"] = $user;

            if ($remember) {
                setcookie("username", $user, time() + (7 * 24 * 60 * 60), "/");
            }

            if (isset($_COOKIE["logged_out"])) {
                setcookie("logged_out", "", time() - 3600, "/");
            }

            header("Location: dashboard.php");
            exit();
        } else {
            $error = "Invalid username or password";
        }
    }
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<div class="login-box">
    <img src="Screenshot 2025-12-09 205239.png" alt="Logo">
    <h2>Admin Panel</h2>
    <p>Sign in with your admin information</p>

    <form method="post">
        <input type="text" name="username" placeholder="Username" required><br><br>
        <input type="password" name="password" placeholder="Password" required><br><br>
        <label>
            <input type="checkbox" name="remember"> Remember Me
        </label><br><br>
        <input type="submit" value="Login">
    </form>

    <?php if (!empty($error)) : ?>
        <p style="color:red;"><?php echo $error; ?></p>
    <?php endif; ?>
</div>
</body>
</html>
