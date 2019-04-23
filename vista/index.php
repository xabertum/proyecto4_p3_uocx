<?php
include '../datos/conexion.php';

$cnx = Conexion::conectar();

?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>World News - Homepage</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/bootstrap-grid.css" rel="stylesheet">
<link href="css/bootstrap-reboot.css" rel="stylesheet">

<!-- Custom CSS Stylesheets -->
<link href="css/index-style.css" rel="stylesheet">

</head>

<body>

	<!-- NAVBAR -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
			<a class="navbar-brand" href="#"><img id="logo-id" height="24" src="./img/logoNewsBlanco.png" alt="logoNewsBlanco">  All Your News</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse"
				data-target="#navbarsExample07" aria-controls="navbarsExample07"
				aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active li-sign-in"><a class="nav-link"
						href="sign-in.html"> <img class="icon-position"
							src="img/ic_account_circle_white_48dp_1x.png" height="24px"
							alt="Sign-In Icon"> <span id="sign-position">Sign-In</span>
					</a></li>					
				</ul>
			</div>
		</div>
	</nav>

	<!-- LATEST NEWS SECTION -->
	<div class="container-fluid intro-bg">

		<div class="container">
			<div class="custom-container">
				<p id="date"></p>
			</div>
		</div>
		<div class="container intro-news">
			<div class="row">
				<div class="col-sm-6">
					<div class="custom-container">
						<h2>Bienvenido a All Your News</h2>
					</div>
				</div>				
			</div>
		</div>
	</div>

	<!-- NEWS SECTION -->

	<div class="container title-news">
		<h2>News</h2>
	</div>

	<div class="container latest-news">
		<div class="row">
			<div class="col-3">				

			</div>

			<div class="col-3">
				
			</div>

			<div class="col-3">
				
			</div>

			<div class="col-3">
				
			</div>
		</div>
	</div>


	<!-- FOOTER -->

	<footer>
		<div class="container-fluid">
			<div class="container">
				<div class="row">

					<div class="col-3">
						<p>© All Your News, 2019</p>
					</div>
					<div class="col-3">

						<ul class="footer-ul">
							<li>About Us</li>
							<li>Contact</li>
							<li>Terms &amp; Conditions</li>
						</ul>
					</div>
					<div class="col-3">
						<ul class="footer-ul">
							<li><img src="img/Path 38.png" width="10" alt=""> Facebook</li>
							<li><img src="img/Path 39.png" width="10" alt=""> Twitter</li>
							<li><img src="img/Path 40.png" width="10" alt=""> Instagram</li>
						</ul>
					</div>
					<div class="col-3">
						<form action="">
							Subscribe to our newsletter <input class="input-footer"
								type="text" placeholder="Email Address">
							<button>OK</button>
						</form>
					</div>
				</div>
			</div>
		</div>

	</footer>


	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script	src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

</body>

</html>
