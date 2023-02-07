<?php
require_once 'includes/dbh.inc.php';
// get the username's hashed password from the database
$sql = 'SELECT password FROM korisnici WHERE usertype = ?';
// initialize and prepare statement
$stmt = $conn->stmt_init();
$stmt->prepare($sql);
// bind the input parameter
$stmt->bind_param('s', $usertype);
$stmt->execute();
// bind the result, using a new variable for the password
$stmt->bind_result($storedPwd);
$stmt->fetch();
// check the submitted password against the stored version
if (password_verify($password, $storedPwd)) {
    session_start();
    $_SESSION['usertype'] = 'admin';
    // get the time the session started
    exit;
} 

