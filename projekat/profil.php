<?php 

include_once 'profilheader.php';

?>

<?php 

require_once 'includes/dbh.inc.php';
require_once 'includes/functions.inc.php';






if(isset($_POST["submit"]))

{
  $pwd = $_POST["pwd"];
  $newpwd = $_POST["newpwd"];
  $confirmpwd = $_POST["confirmpwd"];
  $username = $_SESSION["username"] ;

  


  $sql = "SELECT * FROM korisnici WHERE username = '" . $username . "' ";
  $result = mysqli_query($conn , $sql);
  $row = mysqli_fetch_object($result);



  if(password_verify($pwd , $row->password))
  {
   
    if ($newpwd == $confirmpwd)
{ 

    $sql = "UPDATE korisnici SET password = '" . password_hash($newpwd , PASSWORD_DEFAULT) . "' WHERE  username = '" . $username . "' ";
    mysqli_query($conn, $sql);
    echo "<p> PASSWORD IS SUCCESSFULLY CHANGED </p>" ;
} 

else {
    echo"<p> Passwords don't match </p>"; 
 }
}
 else{


     echo"<p>Password is not correct </p>" ;
 }
}


?>

<section id="signed">
<h2> Promijenite vaš password </h2>


<form action="profil.php" method="post" >

<input type="email" name="email" id="mail" placeholder="Unesite email..">
<br> 
<br> 
<input type="password" name="pwd" placeholder="Unesite password...">
<br> 
<br> 
<input type="password" name="newpwd" id="pass" placeholder="Unesite novi password...">
<br> 
<br> 
<input type="password" name="confirmpwd" id="pass1" placeholder="Potvrdite novi password...">
<br> 
<br> 
<button Type="submit" name="submit" onclick= "mejlcek() , passwordvalidation2()" > Potvrdi </button>

</form>

</section>


<?php 

include_once 'footer.php';

?>