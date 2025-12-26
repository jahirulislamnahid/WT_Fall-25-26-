<?php
session_start();
?>

<DOCTYPE html>
    <head>
        <title> Office Management System Home</title>
        <link rel="stylesheet" href="homeCSS.php">
</head>
<body>
    <h1>Welcome to My Website</h1>
   
   <?php
if (isset($_SESSION["username"])) {
    echo "<p>You are logged in as <b>{$_SESSION['username']}</b></p>";

    echo "
    <div class='btn-group'>
        <a href='dashboard.php' class='btn dashboard-btn'>Go to Dashboard</a>
        <a href='logout.php' class='btn logout-btn'>Logout</a>
    </div>
    ";
}
?>

    
    <div class="content">
        <h1> NeuroByte <br>
        <span> An Intelligent software Solutions <br> for your Business</span>
    </h1>

    <p>
        The all-in-one platform to streamline your HR processes, <br>
        from payroll and attendances to leave management and announcements.
        Empower your workforce and simplify your administration.<br>
        <br>
</p>
    <div class="auth-buttons">
     <a href="login.php" class="login">Login</a>
     <a href="register.php" class="Register">Register Now</a>
</div>
    
<div class="video-box">
    <iframe
        src="https://www.youtube.com/embed/mq508HXzccI?autoplay=1&mute=1&rel=0"
        title="YouTube video"
        frameborder="0"
        allow="autoplay; encrypted-media; picture-in-picture"
        allowfullscreen>
    </iframe>
</div>

</body>
</html>




