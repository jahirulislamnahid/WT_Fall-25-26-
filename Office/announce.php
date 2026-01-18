<?php
include "db.php";

if (isset($_POST['create_announcement'])) {

$title = $_POST['title'];

$uploadDir = "uploads/";
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

$fileName = time() . "_" . $FILES['pdf']['name'];
$filePath = $uploadDir . $fileName;

move_uploaded_file($_FILES['pdf']['tmp_name'], $filePath);

mysqli_query($conn, "
    INSERT INTO announcemnets (title, file_path)
    VALUES ('$title', '$filePath')

  ");

  header("Location: " . $_SERVER['PHP_SELF']);
  exit;
}

