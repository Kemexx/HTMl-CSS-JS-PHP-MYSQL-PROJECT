<?php 

include_once 'Loginheader.php';

?>
	
<section id="signed">
    <h2> Registrujte se </h2>
    <form action="includes/signup.inc.php" method="post" >
    <input type="text" name="name" placeholder="Unesite vaše ime" >
    <br>
    <br>
    <input type="text" name="surname" placeholder="Unesite vaše prezime" >
    <br>
    <br>
    <input type="text" name="uname" placeholder="Unesite vaš username" >
    <br>
    <br>
    <input type="email" name="email"  id="mail" placeholder="Unesite vaš email" >
    <br>
    <br>
    <input type="password" name="pwd" id="pass" placeholder="Unesite vaš password" >
    <br>
    <br>
    <input type="password" name="repwd" id="pass1"  placeholder="Ponovo unesite vaš password" >
    <br>
    <br>
    <button Type="submit" name="submit" id="button_1" onclick= "mejlcek() , passwordvalidation()"  > Sign up </button>
    </form>
    

</section>



<?php 

include_once 'footer.php';

?>