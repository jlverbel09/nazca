<?php include './layouts/header.php'; ?>

<!-- Start slides -->
<div id="slides" class="cover-slides">
	<ul class="slides-container">
		<li class="text-center overlay-background">
			<div class="oscurecedor"></div>
			<img src="images/slider/slider-01.jpg" alt="">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 class="m-b-20"><strong>Bienvenidos a <br> <b class="texto-principal-bordeado">NAZCA</b> <br><small>Restaurante & Pisco Bar</small></strong></h1>
						<p class="m-b-40">
							Somos un homenaje a nuestras raíces, un espacio donde el arte milenario de nuestra tierra se fusiona con la alta cocina y la pureza del Pisco. Déjate envolver por una experiencia sensorial única en el corazón de la ciudad.
						</p>
						<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="menu.php">Nuestro Menú</a></p>
					</div>
				</div>
			</div>
		</li>
		<li class="text-center overlay-background">
			<div class="oscurecedor"></div>
			<img src="images/slider/slider-02.jpg" alt="">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 class="m-b-20"><strong>Bienvenidos a <br> <b class="texto-principal-bordeado">NAZCA</b> <br><small>Restaurante & Pisco Bar</small></strong></h1>
						<p class="m-b-40">Historia que se bebe, tradición que se saborea. <br>
							Alta cocina y Pisco con raíces milenarias.</p>
						<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="reservation.php">Reservación</a></p>
					</div>
				</div>
			</div>
		</li>
		<li class="text-center overlay-background">
			<div class="oscurecedor"></div>
			<img src="images/slider/slider-03.jpg" alt="">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 class="m-b-20"><strong>Bienvenidos a <br> <b class="texto-principal-bordeado">NAZCA</b> <br><small>Restaurante & Pisco Bar</small></strong></h1>
						<p class="m-b-40">Una joya gastronómica que cautiva tus sentidos. ¡Ven y deléitate!.</p>
						<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="reservation.php">Reservación</a></p>
					</div>
				</div>
			</div>
		</li>
	</ul>
	<div class="slides-navigation">
		<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
		<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
	</div>
</div>
<!-- End slides -->

<!-- Start About -->
<?php include 'historia.php' ?>
<!-- End About -->

<!-- Start QT -->
<?php include 'frase.php' ?>
<!-- End QT -->

<!-- Start Menu -->
<?php include 'menuGlobal.php' ?>
<!-- End Menu -->

<!-- Start Gallery -->
<img class="icono3" src="./images/icono3.png" alt="">
<img class="icono4" src="./images/icono4.png" alt="">
<?php include 'galeriaGlobal.php' ?>
<!-- End Gallery -->

<!-- Start Customer Reviews -->
<?php include 'reseñasGlobal.php' ?>
<!-- End Customer Reviews -->

<?php include './layouts/footer.php';
