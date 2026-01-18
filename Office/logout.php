<?php
session_start();

session_destroy();

setcookie("logged_out", "true", time() + 60, "/"); // expires in 60 sec

header("Location: homepage.php");
exit();
?>
