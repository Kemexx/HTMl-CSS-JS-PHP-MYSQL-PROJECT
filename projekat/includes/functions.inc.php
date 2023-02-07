<?php 

function emptyInputSignup ($name, $surname, $uname, $email, $pwd, $repwd) {
    $result;

    if ( empty($name) || empty($surname ) || empty($uname ) || empty($email ) || empty($pwd ) || empty($repwd )) {
    $result= true;
  
    } else {
    $result = false;
    } 
    return $result;
}


function invalidName ($name, $surname){

    if (!preg_match("/^[a-zA-Z]*$/", $name, $surname)) {
    $result= true;
    }
     else {
    $result = false;
    } 
    return $result;
}




function pwdmatch ($pwd, $repwd) {
    $result;

    if ($pwd !== $repwd) {
    $result= true;
  
    } else {
    $result = false;
    } 
    return $result;
}
    
function usernameExists ($conn, $uname) {
$sql = "SELECT * FROM korisnici WHERE username= ?;" ; 
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
header("location: ../signup.php?error=StatementFailed");
exit();

}

mysqli_stmt_bind_param($stmt, "s" , $uname );
mysqli_stmt_execute($stmt);

$resultData = mysqli_stmt_get_result($stmt);

if($row = mysqli_fetch_assoc($resultData)) {
return $row;
}
else {
    $result = false;
    return $result;
}


mysqli_stmt_close($stmt);


}






function createUser ($conn, $name, $surname, $uname, $email, $pwd) {
    $sql = "INSERT INTO korisnici (ime, prezime, username, email, password) VALUES (?, ?, ?, ?, ?);" ; 
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../signup.php?error=StatementFailed");
    exit();
    
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    
    mysqli_stmt_bind_param($stmt, "sssss" , $name, $surname, $uname, $email, $hashedPwd);
    mysqli_stmt_execute($stmt);
    

    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();

}


/* LOGIN FUNKCIJE */
    

function emptyInputLogin ($uname, $pwd) {
    $result;

    if ( empty($uname) || empty($pwd )) {
    $result= true;
  
    } else {
    $result = false;
    } 
    return $result;
}

function loginUser($conn, $uname, $pwd)  {
$usernameExists = usernameExists ($conn, $uname);


 

if ($usernameExists === false) {
    header("location: ../login.php?error=wronglogin");
    exit();
}



 
$pwdHashed = $usernameExists["password"];

$checkPwd = password_verify($pwd, $pwdHashed);


if($checkPwd === false){
    header("location: ../login.php?error=wrongPassword");
    exit();
}
else if ($checkPwd === true) {
    session_start();
    $_SESSION["username"] = $usernameExists["username"];
    header("location: ../naslovna.php");
    exit();  
 }  
 
}






/* PROFIL FUNKCIJE */






    
    