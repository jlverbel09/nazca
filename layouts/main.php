<?php 
$url = $_SERVER['REQUEST_URI'];
$url = explode('/',$url);
$enlace = $url[2];
?>
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.php">
					<img src="images/logo2.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item <?php if($enlace == 'index.php'){ echo 'active';} ?>"><a class="nav-link" href="index.php">Inicio</a></li>
						<li class="nav-item <?php if($enlace == 'menu.php'){ echo 'active';} ?>"><a class="nav-link" href="menu.php">Menú</a></li>
						<li class="nav-item <?php if($enlace == 'about.php'){ echo 'active';} ?>"><a class="nav-link" href="about.php">Sobre Nosotros</a></li>
						<li class="nav-item <?php if($enlace == 'reservation.php'){ echo 'active';} ?>"><a class="nav-link" href="reservation.php">Reservar</a></li>
						<li class="nav-item <?php if($enlace == 'stuff.php'){ echo 'active';} ?>"><a class="nav-link" href="stuff.php">Nuestro Equipo</a></li>
						<li class="nav-item <?php if($enlace == 'gallery.php'){ echo 'active';} ?>"><a class="nav-link" href="gallery.php">Galería</a></li>
						<li class="nav-item <?php if($enlace == 'contact.php'){ echo 'active';} ?>"><a class="nav-link" href="contact.php">Contáctanos</a></li>
						<!-- <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Pages</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="reservation.php">Reservation</a>
								<a class="dropdown-item" href="stuff.php">Stuff</a>
								<a class="dropdown-item" href="gallery.php">Gallery</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Blog</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="blog.php">blog</a>
								<a class="dropdown-item" href="blog-details.php">blog Single</a>
							</div>
						</li> -->
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->