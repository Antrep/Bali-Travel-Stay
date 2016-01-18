<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>header</title>
 	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="css/responsiveslides.css">
    <script src="js/jquery183.min.js"></script>
    <script src="js/responsiveslides.min.js"></script>
  </head>
  <body>
    <header>
	<div class="zerogrid">
		<div class="wrap-header">
			<div class="row">
				<div class="col-1-3">
					<div class="wrap-col">
						<div class="logo"><a href="index.php"><img src="images/logo.png"/></a></div>	
					</div>
				</div>
				<div class="col-1-3 offset-1-3">
					<div class="wrap-col">
						<form method="get" action="/search" id="search" class="f-right">
						  <input name="q" type="text" size="40" placeholder="Search..." />
						</form>
					</div>
				</div>
			</div>
		</div>
		<nav id="menu-wrap"><div id="menu-trigger">Menu</div>    
			<ul id="menu" style="display: none;">
				<li><a href="index.php">Home</a></li>
				<!-- <li>
					<a href="#">Categories</a>
					<ul>
						<li>
							<a href="#">Item 01</a>
						</li>
						<li>
							<a href="#">Item 02</a>
						</li>
						<li>
							<a href="#">Item 03</a>
							<ul>
								<li><a href="#">Item 31</a></li>
								<li><a href="#">Item 32</a></li>
							</ul>				
						</li>
						<li>
							<a href="#">Item 04</a>				
							<ul>
								<li><a href="#">Item 41</a></li>
								<li><a href="#">Item 42</a></li>
								<li><a href="#">Item 43</a></li>
								<li><a href="#">Item 44</a></li>
							</ul>	
						</li>
					</ul>
				</li> -->
				<li><a href="single.php">About</a></li>
				<li><a href="contact1.php">Contact</a></li>
				<?php
				if(isset($_SESSION['id'])) {
				?>
				<li><a href="calendar.php">Bookings</a></li>
				<?php
				}
				?>
				<?php
				if(!isset($_SESSION['id'])) {
				?>
				<li><a href="register.html">Registreren</a></li>
				<?php
				}
				?>
				<?php
				if(!isset($_SESSION['id'])) {
				?>
				<li><a href="login.html">Inloggen</a></li>
				<?php
				}
				?>
				<?php
				if(isset($_SESSION['id'])) {
				?>
				<li><a href="login/logout.php">Uitloggen</a></li>
				<?php
				}
				?>
			</ul>
		</nav>
</header>
</body>
</html>



