<?php
session_start();
?>

<DOCTYPE html>
    <html>
        <head>
            <title> Our project homepage</title>
            <link rel="stylesheet" href="homeCSS.php">
</head>
<body>
    <div class="background">
        
        <h1><span>IT Solitions </span> For <br> your Business</h1>
        <h2> Neurobyte </h2>
        <h3> Intelligent Software Solutions for a Smarter Future </h3>

</div>
     

    <?php
if (isset($_SESSION["username"])) {
     echo "<p> You are logged in as <b>" .$_SESSION['username'] . "</b></p>";

     echo "<a href= 'AdminDashboard.php'> <button type='button'> Go to Dashboard </button> </a> <br> <br>";

     echo "<a href='logout.php'> <button type='button'> Logout</button> </a>";
     
} 
   else{
      
    echo "<p> You are logged in </p>";

    echo "<a href='login.php'> <button type = 'button'> Login</button> </a>";

    echo "< a href='register.php'> <button type ='button'> Register now </button> </a>";

   }
   ?>
   
</body>
</html>

