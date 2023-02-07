<?php

if (isset($_POST["submit"])) {


$name = $_POST["name"];
$surname= $_POST["surname"];
$uname= $_POST["uname"];
$email = $_POST ["email"];
$pwd = $_POST ["pwd"];
$repwd = $_POST ["repwd"];

require_once 'dbh.inc.php';
require_once 'functions.inc.php';

if ( emptyInputSignup ($name, $surname, $uname, $email, $pwd, $repwd) !== false) {
    header("location: ../signup.php?error=emptyinput" );
    exit();


}

if (invalidName($name, $surname)!== false) {
    header("location: ../signup.php?error=InvalidNameOrSurname");
    exit();
}






if (usernameExists ($conn, $username) !== false) {
    header("location: ../signup.php?error=UsernameAlreadyExists" );
    exit();
}

if (pwdmatch ($pwd , $repwd) !== false) {
    header("location: ../signup.php?error=passwordsdontmatch" );
    exit();
}




createUser($conn, $name, $surname, $uname, $email, $pwd);


} 
else {
    header("location: ../signup.php" );
    exit();
}

