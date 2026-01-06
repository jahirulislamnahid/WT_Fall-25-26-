
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['index'], $_POST['status'])) {

    $index = (int) $_POST['index'];
    $status = $_POST['status'];

    // Update leave status if the index exists
    if (isset($_SESSION["leaves"][$index])) {
        $_SESSION["leaves"][$index]["status"] = $status;
    }

    // Redirect back to manage leaves dashboard
    header("Location: ManageLeaves.php");
    exit();
}
