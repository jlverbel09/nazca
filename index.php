<?php include './layouts/header.php'; ?>

<!-- Start slides -->
<div id="slides" class="cover-slides">
	<ul class="slides-container">
		<li class="text-center">
			<img src="images/slider/slider-01.jpg" alt="">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 class="m-b-20"><strong>Bienvenidos a <br> NAZCA <br><small>Restaurante & Pisco Bar</small></strong></h1>
						<p class="m-b-40">
							Somos un homenaje a nuestras raíces, un espacio donde el arte milenario de nuestra tierra se fusiona con la alta cocina y la pureza del Pisco. Déjate envolver por una experiencia sensorial única en el corazón de la ciudad.
						</p>
						<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Nuestro Menú</a></p>
					</div>
				</div>
			</div>
		</li>
		<li class="text-center">
			<img src="images/slider/slider-02.jpg" alt="">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 class="m-b-20"><strong>Bienvenidos a <br> NAZCA <br><small>Restaurante & Pisco Bar</small></strong></h1>
						<p class="m-b-40">Historia que se bebe, tradición que se saborea. <br>
							Alta cocina y Pisco con raíces milenarias.</p>
						<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservación</a></p>
					</div>
				</div>
			</div>
		</li>
		<!-- <li class="text-center">
			<img src="images/slider/slider-03.jpg" alt="">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 class="m-b-20"><strong>Bienvenidos a <br> NAZCA</strong></h1>
						<p class="m-b-40">See how your users experience your website in realtime or view <br>
							trends to see any changes in performance over time.</p>
						<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="#">Reservación</a></p>
					</div>
				</div>
			</div>
		</li> -->
	</ul>
	<div class="slides-navigation">
		<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
		<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
	</div>
</div>
<!-- End slides -->

<!-- Start About -->
<div class="about-section-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12">
				<img src="images/principal/about-img.png" alt="" class="img-fluid">
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 text-center">
				<div class="inner-column">
					<h1 class="text-white">Bienvenido a <span class="text-principal">NAZCA</span></h1>
					<h4 class="text-light">Pequeña Historia</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor suscipit feugiat. Ut at pellentesque ante, sed convallis arcu. Nullam facilisis, eros in eleifend luctus, odio ante sodales augue, eget lacinia lectus erat et sem. </p>
					<p>Sed semper orci sit amet porta placerat. Etiam quis finibus eros. Sed aliquam metus lorem, a pellentesque tellus pretium a. Nulla placerat elit in justo vestibulum, et maximus sem pulvinar.</p>
					<a class="btn btn-lg btn-circle btn-outline-new-white text-light" href="#">Reservación</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End About -->

<!-- Start QT -->
<div class="qt-box qt-background">
	<div class="container">
		<img src="./images/icono1.png" class="icono1" alt="">
		<img src="./images/icono2.png" class="icono2" alt="">
		<div class="row">
			<div class="col-md-8 ml-auto mr-auto text-left">
				<p class="lead ">
					" If you're not the one cooking, stay out of the way and compliment the chef. "
				</p>
				<span class="lead">Michael Strahan</span>
			</div>
		</div>
	</div>
</div>
<!-- End QT -->

<!-- Start Menu -->
<div class="menu-box">

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="heading-title text-center">
					<h2>Menú</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="special-menu text-center">
					<div class="button-group filter-button-group">
						<button class="active" data-filter="*">Todo</button>
						<button data-filter=".drinks">Bebidas</button>
						<button data-filter=".lunch">Postres</button>
						<button data-filter=".dinner">Batidos</button>
					</div>
				</div>
			</div>
		</div>

		<div class="row special-list">

			<?php
			for ($i = 0; $i < 9; $i++) {
			?>
				<div class="col-lg-4 col-md-6 special-grid drinks px-1">
					<div class="gallery-single fix m-2">
						<img src="images/menu/img-01.jpg" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4>Special Drinks 1</h4>
							<p>Sed id magna vitae eros sagittis euismod.</p>
							<h5> $7.79</h5>
						</div>
					</div>
				</div>

			<?php
			}

			?>



		</div>
	</div>
</div>
<!-- End Menu -->

<!-- Start Gallery -->
<div class="gallery-box">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="heading-title text-center">
					<h2>Galería</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
				</div>
			</div>
		</div>
		<div class="tz-gallery">
			<div class="row">
				<?php

				for ($i = 0; $i < 6; $i++) {
				?>

					<div class="col-sm-12 col-md-4 col-lg-4">
						<a class="lightbox" href="images/galeria/gallery-img-01.jpg">
							<img class="img-fluid" src="images/galeria/gallery-img-01.jpg" alt="Gallery Images">
						</a>
					</div>
				<?php
				}
				?>
			</div>
		</div>
	</div>
</div>
<!-- End Gallery -->

<!-- Start Customer Reviews -->
<div class="customer-reviews-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="heading-title text-center">
					<h2>Reseñas de nuestros clientes</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 mr-auto ml-auto text-center">
				<div id="reviews" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner mt-4">
						<?php
						for ($i = 0; $i < 3; $i++) {
							if ($i == 0) {
								$active = 'active';
							} else {
								$active = '';
							}
						?>

							<div class="carousel-item text-center <?= $active ?>">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="images/profile/profile-1.jpg" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="h4 text-principal text-uppercase">Paul Mitchel</strong></h5>
								<h6 class="text-light m-0">Web Developer</h6>
								<p class="m-0 pt-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
							</div>

						<?php
						}
						?>
					</div>
					<a class="carousel-control-prev" href="#reviews" role="button" data-slide="prev">
						<i class="fa fa-angle-left" aria-hidden="true"></i>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#reviews" role="button" data-slide="next">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Customer Reviews -->

<?php include './layouts/footer.php';
