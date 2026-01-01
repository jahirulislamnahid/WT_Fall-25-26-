<?php
session_start();

$index = $_GET["index"] ?? null;

if (!isset($_SESSION["departments"][$index])) {
    header("Location: Departments.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $_SESSION["departments"][$index]["name"] = $_POST["department"];
    header("Location: Departments.php");
    exit();
}
?>

<form method="post">
    <h2>Edit Department</h2>
    <input type="text" name="department"
           value="<?= $_SESSION["departments"][$index]["name"] ?>" required>
    <button type="submit">Update</button>
</form>
