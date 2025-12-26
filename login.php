<?php
session_start();
if (isset($_SESSION["username"]))
{
    header("Location:dashboard.php");
    exit();
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$user=$_POST["username"];
$pass=$_POST["password"];

if ($user=="admin" && $pass=="1234")
{

    $_SESSION["username"] = $user;
    header("Location:dashboard.php");
    exit();
}
else{

    $error="Invalid Id and pass";
}

}

?>
<DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="loginCSS.php">  
</head>
<body>
     <div class="login-box">
        <img src="Screenshot 2025-12-09 205239.png">


        <h2>Admin Panel</h2>
        <p>Sign in with your admin Information</p>

    <form method="post">
    <input type="text" name="username" placeholder="Username"><br><br>
    <input type="password" name="password" placeholder="Password"><br><br>
    <input type="submit" value="Login">

    </form>

    </div>

<p style="color:red;">
    <?php if (isset($error)) echo $error; ?>
</p>

</body>
</html>
