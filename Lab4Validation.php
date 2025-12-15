<?php

///Name
$nameErr = "";

if (empty($_POST['name'])) {
    $nameErr = "user name cannot be empty";
} else {
    $name = $_POST['name'];

    if (!preg_match("/^[A-Za-z][A-Za-z.\- ]*$/", $name)) {
        $nameErr = "Invalid name format";
    }
    elseif (str_word_count($name) < 2) {
        $nameErr = "Name must contain at least two words";
    }
}

if (empty($nameErr)) {
    echo "Valid Name";
} else {
    echo $nameErr;
}

///Email
$emailErr = "";

if (empty($_POST['email'])) {
    $emailErr = "Your Email cannot be empty";
}

if (empty($emailErr)) {
    echo "Valid Email";
} else {
    echo $emailErr;
}

///DOB

$dobErr = "";

if (empty($_POST['dob'])) {
    $dobErr = "Date of Birth cannot be empty";
} else {
    $dob = $_POST['dob'];
    list($yy, $mm, $dd) = explode('-', $dob);

    if (
        !is_numeric($dd) || !is_numeric($mm) || !is_numeric($yy) ||
        $dd < 1 || $dd > 31 ||
        $mm < 1 || $mm > 12 ||
        $yy < 1953 || $yy > 1998
    ) {
        $dobErr = "Invalid Date of Birth";
    }
}

if (empty($dobErr)) {
    echo "Valid Date of Birth";
} else {
    echo $dobErr;
}

/// Gender
$genderErr = "";

if (empty($_POST['gender'])) {
    $genderErr = "Atleat one gender option must be selected";
}
if (empty($genderErr)) {
    echo "Valid Gender choose";
} else {
    echo $genderErr;
}

/// Degree
$degreeErr = "";

if (!isset($_POST['degree']) || count($_POST['degree']) < 2) {
    $degreeErr = "At least two options must be selected";
}
if (empty($degreeErr)) {
    echo "Valid Degree Selection";
} else {
    echo $degreeErr;
}


/// blood
$bloodErr = "";

if (empty($_POST['blood'])) {
    $bloodErr = "Atleat one option must be selected for blood group";
}
if (empty($bloodErr)) {
    echo "Valid blood group";
} else {
    echo $bloodErr;
}



?>


