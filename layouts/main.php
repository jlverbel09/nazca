<?php
$url = $_SERVER['REQUEST_URI'];
$url = explode('/', $url);
$enlace = $url[2];
?>
<!-- Start header -->
<header class="top-navbar">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="index">
				<img src="images/logo2.png" alt="" />
			</a>
			<div class="vistas"></div>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbars-rs-food">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item <?php if ($enlace == 'index') {
											echo 'active';
										} ?>"><a class="nav-link" href="index">Inicio</a></li>
					<li class="nav-item <?php if ($enlace == 'menu') {
											echo 'active';
										} ?>"><a class="nav-link" href="menu">Menú</a></li>
					<li class="nav-item <?php if ($enlace == 'about') {
											echo 'active';
										} ?>"><a class="nav-link" href="about">Sobre Nosotros</a></li>
					<li class="nav-item <?php if ($enlace == 'reservation') {
											echo 'active';
										} ?>"><a class="nav-link" href="reservation">Reservar</a></li>
					<li class="nav-item <?php if ($enlace == 'stuff') {
											echo 'active';
										} ?>"><a class="nav-link" href="stuff">Nuestro Equipo</a></li>
					<li class="nav-item <?php if ($enlace == 'gallery') {
											echo 'active';
										} ?>"><a class="nav-link" href="gallery">Galería</a></li>
					<li class="nav-item <?php if ($enlace == 'contact') {
											echo 'active';
										} ?>"><a class="nav-link" href="contact">Contáctanos</a></li>
					<!-- <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Pages</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="reservation">Reservation</a>
								<a class="dropdown-item" href="stuff">Stuff</a>
								<a class="dropdown-item" href="gallery">Gallery</a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Blog</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="blog">blog</a>
								<a class="dropdown-item" href="blog-details">blog Single</a>
							</div>
						</li> -->
				</ul>
			</div>
		</div>
	</nav>
</header>
<!-- End header -->