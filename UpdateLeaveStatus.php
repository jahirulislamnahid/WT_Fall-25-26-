<?php
session_start();

if (isset($_POST['index'], $_POST['status'])) {
    $index = (int) $_POST['index'];
    $status = $_POST['status'];

    if (isset($_SESSION['leaves'][$index])) {
        $_SESSION['leaves'][$index]['status'] = $status;
    }
}

header("Location: ManageLeaves.php");
exit;
?>
