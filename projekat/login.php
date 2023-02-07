<?php 

include_once 'Loginheader.php';

?>
	
    <section id="signed">
    <h2> Prijavite se </h2> 
    <form action="includes/login.inc.php" method="post" >

    <input type="name" name="uname" id="username" placeholder="Unesite username...">
    <br> 
    <br> 
    <input type="password" name="pwd" id="password" placeholder="Unesite password...">
    <br> 
    <br>  
    <button Type="submit" name="submit" > Log in </button>
   
    
    </form>

    </section>

<?php 

include_once 'footer.php';

?>
 