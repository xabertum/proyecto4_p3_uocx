<?php
include '../datos/conexion.php';

$cnx = Conexion::conectar();

session_start();

?>


<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>All Your News - Administración</title>
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
		<a class="navbar-brand" href="#"><img id="logo-id" height="29px" src="./img/logoNewsBlanco.png" alt="logoNewsBlanco">  All Your News</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse"
				data-target="#navbarsExample07" aria-controls="navbarsExample07"
				aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active li-sign-in"><a class="nav-link"
						href="cerrar-sesion.php"> <img class="icon-position"
							src="img/exit_delete_close_remove_door-48.png" height="24px"
							alt="Sign-In Icon"> <span id="sign-position"><?php echo $_SESSION["usuario"]["nombre"]; ?></span>

					</a></li>

					<li class="nav-item active li-wrapper li-color-1"><a
						class="nav-link" href=""> <span>Home</span>
					</a></li>

					<li class="nav-item active li-wrapper"><a class="nav-link" href="">
							<span>News</span>
					</a></li>

					<li class="nav-item active li-wrapper"><a class="nav-link" href="">
							<span>Sports</span>
					</a></li>

					<li class="nav-item active li-wrapper"><a class="nav-link" href="">
							<span>Weather</span>
					</a></li>

					<li class="nav-item active li-wrapper"><a class="nav-link" href="">
							<span>Shop</span>
					</a></li>

					<li class="nav-item active li-wrapper"><a class="nav-link" href="">
							<span>Earth</span>
					</a></li>

					<li class="nav-item active li-wrapper"><a class="nav-link" href="">
							<span>Travel</span>
					</a></li>

					<li class="nav-item active li-wrapper"><a class="nav-link" href="">
							<span>Capital</span>
					</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- LATEST NEWS SECTION -->
	<div class="container-fluid latest-bg">

		<div class="container">
			<div class="custom-container">
				<p id="date"></p>
			</div>
		</div>
		<div class="container latest-news">
			<div class="row">
				
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
