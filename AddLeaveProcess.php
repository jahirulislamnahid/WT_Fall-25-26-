<?php
session_start();

/* Ensure session array exists */
if (!isset($_SESSION['leaves']) || !is_array($_SESSION['leaves'])) {
    $_SESSION['leaves'] = [];
}

/* Validate required fields */
$required = [
    'emp_id', 'emp_name', 'leave_type',
    'department', 'reason', 'start_date', 'end_date'
];

foreach ($required as $field) {
    if (empty($_POST[$field])) {
        die("Error: All fields are required.");
    }
}

/* Sanitize inputs */
$emp_id     = trim($_POST['emp_id']);
$emp_name   = trim($_POST['emp_name']);
$leave_type = trim($_POST['leave_type']);
$department = trim($_POST['department']);
$reason     = trim($_POST['reason']);
$start      = $_POST['start_date'];
$end        = $_POST['end_date'];

/* Validate dates */
$startTime = strtotime($start);
$endTime   = strtotime($end);

if ($startTime === false || $endTime === false || $endTime < $startTime) {
    die("Error: Invalid date selection.");
}

/* Calculate total days */
$days = (($endTime - $startTime) / (60 * 60 * 24)) + 1;

/* Create leave record */
$leave = [
    'emp_id'     => htmlspecialchars($emp_id),
    'emp_name'   => htmlspecialchars($emp_name),
    'leave_type' => htmlspecialchars($leave_type),
    'department' => htmlspecialchars($department),
    'reason'     => htmlspecialchars($reason),
    'start_date' => $start,
    'end_date'   => $end,
    'days'       => (int)$days,
    'status'     => 'Pending'
];

/* Save to session */
$_SESSION['leaves'][] = $leave;

/* Redirect back to dashboard */
header("Location: ManageLeaves.php");
exit;
?>
