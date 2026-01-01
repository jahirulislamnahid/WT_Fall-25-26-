<?php
session_start();

if (isset($_POST["index"])) {
    $index = $_POST["index"]
    unset($_SESSION["departments"][$index]);

    $_SESSION["departments"] = array_values($_SESSION["departments"]);
}

header("Location: Departments.php");
exit();
