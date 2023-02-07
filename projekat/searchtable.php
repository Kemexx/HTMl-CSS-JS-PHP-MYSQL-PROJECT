<?php 

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width">
    <meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="./stil3.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet"> 


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@600&display=swap" rel="stylesheet"> 



<script type="text/javascript" src="skripta2.js"></script>
<title> ZMshop </title>
</head>
<body>
	<header>
	<div class="container">
		<div id="branding">
			<h1><span class="highlight">ZM</span>shop</h1>
		</div>
		<nav>
			<ul>
			<li><a href="naslovna.php"> Naslovna </a></li>
				<li><a href="proizvodi/proizvodi.php"> Proizvodi </a></li>
				<li><a href="info.php"> O nama </a></li>
                <?php

				if(isset($_SESSION["username"])) {
					echo "<li><a href='profil.php'> Profil </a></li>";
					echo "<li><a href='searchtable.php'> Pretraga </a></li>";
					echo "<li><a href='includes/logout.inc.php'> Odjavite se </a></li>";
				}   else {
					echo "<li><a href='signup.php'> Registrujte se </a></li>";
				    echo "<li><a href='login.php'> Prijavite se </a></li>";
				}
                ?>
			</ul>
		</nav>
	</div>
</header>
	


<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Pretraži korisnike..">

<table id="myTable">
  <tr class="header">
    <th style="width:40%;">Ime</th>
    <th style="width:40%;">Prezime</th>
	<th style="width:45%;">Email</th>
  </tr>
  <tr>
    <td>Kemal</td>
    <td>Gogic</td>
	<td>gogickemo@gmail.com</td>
  </tr>
  <tr>
    <td>Adminko</td>
    <td>Admincic</td>
	<td>admin@gmail.com</td>
  </tr>
  <tr>
    <td>Salih</td>
    <td>Salihic</td>
	<td>salih@gmail.com</td>
  </tr>
  <tr>
    <td>Danilo</td>
    <td>Galinari</td>
	<td>danilo@gmail.com</td>
  </tr>

</table> 


<footer>
	<p> ZMshop, copyright &copy; 2021 </p>
</footer>