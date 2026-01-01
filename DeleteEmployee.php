<?php
session_start();

if (isset($_POST["index"])) {
    $index = $_POST["index"];

    if (isset($_SESSION["employees"][$index])) {
        unset($_SESSION["employees"][$index]);

        // Re-index array 
        $_SESSION["employees"] = array_values($_SESSION["employees"]);
    }
}

header("Location: EmployeeDashboard.php");
exit();
