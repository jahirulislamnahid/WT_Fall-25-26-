<?php
session_start();

if (isset($_POST['index'], $_POST['ststus'])) {
    $index = (int) $_POST['index'];
    $index = $_POST['index'];

    if (isset($_SESSION['leaves'][$index])) {
        $_SESSION['leaves'][$index]['ststus'] = $status;
    }

}

header("location: ManageLeaves.php");
exit;
?>
