<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">

	<html>
	<head>
	<meta charset="UTF-8">
	<title>Apartmani Dino</title>
	<link rel="stylesheet" type="text/css" href="css/stil.css">
	</head>

	<body id="tijelo">

	<div id="pozadina"></div> 
	<div id="container">
	<div id="navbar">

	
	<ul>
	  <li><a onclick="pageLoad('index.php')">Home</a></li>
	  <li><a onclick="pageLoad('accommodation.html')">Accommodation</a></li>
	   <li onmouseover="showMenu()" onmouseout="hideMenu()"><a onclick="pageLoad('gallery.html')">Gallery</a>
			<ul id="submenu" onmouseover="showMenu()" >
				<li><a href="#">Orebic</a></li>
				<li><a href="#">Apartments</a></li>
			</ul>
			</li>
	  <li><a onclick="pageLoad('contact.php')">Contact</a></li>
	  <li><a onclick="pageLoad('links.html')">Links</a></li>
	</ul>
	
	
	</div>

		<div id="banner">
	<a id="linklogo" href="index.html"> <img id="logo" src="Images/slikalogo.png" alt="Logo" ></a>
	</div>

	
	<?php 
        include 'contact_validate.php'
    ?>
	

	<h1> Contact Us</h1>
	<hr id="linija1"/>

	<?php 
        include $forma;
    ?>
	
	
	<div id="navbardole">
	<ul>
	  <li><a onclick="pageLoad('index.php')">Home</a></li>
	  <li><a onclick="pageLoad('accommodation.html')">Accommodation</a></li>
	  <li><a onclick="pageLoad('gallery.html')">Gallery</a></li>
	  <li><a onclick="pageLoad('contact.php')">Contact</a></li>
	  <li><a onclick="pageLoad('links.html')">Links</a></li>
	</ul>
	</div>
	<footer> Copyleft &copy; by Dino Hurem.</footer>
	</div>
	<script src="skripta.js"> </script>
	<script src="pageload.js"> </script>
	</body>

	</html>