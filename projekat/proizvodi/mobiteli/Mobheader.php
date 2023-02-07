<?php 

session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width">
    <meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="./MobiteliStil.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet"> 


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@600&display=swap" rel="stylesheet"> 



<script type="text/javascript" src="skripta.js"></script>
<title> ZMShop </title>
</head>
<body>
	<header>
	<div class="container">
		<div id="branding">
			<h1><span class="highlight">ZM</span>shop</h1>
		</div>
		<nav>
			<ul>
			    <li><a href="../../naslovna.php"> Naslovna </a></li>
				<li><a href="../proizvodi.php"> Proizvodi </a></li>
				<li><a href="../../info.php"> O nama </a></li>
				<?php

if(isset($_SESSION["username"])) {
	echo "<li><a href='../../profil.php'> Profil </a></li>";
	echo "<li><a href='../../includes/logout.inc.php'> Odjavite se </a></li>";
}   else {
	echo "<li><a href='../../signup.php'> Registrujte se </a></li>";
	echo "<li><a href='../../login.php'> Prijavite se </a></li>";
}
?>
			</ul>
		</nav>
	</div>
</header>

</body>
</html>

