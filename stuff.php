<?php include './layouts/header.php'; ?>

<!-- Start All Pages -->
<div class="all-page-title page-breadcrumb">
	<div class="container text-center">
		<div class="row">
			<div class="col-lg-12">
				<h1>Nuestro Equipo</h1>
			</div>
		</div>
	</div>
</div>
<!-- End All Pages -->

<!-- Start Stuff -->
<img class="icono3 pequeño" src="./images/icono3.png" alt="">
<img class="icono4 pequeño" src="./images/icono4.png" alt="">
<div class="stuff-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="heading-title text-center">
					<!-- <h2>Stuff</h2> -->
					<p>Manos expertas, alma peruana. El talento humano detrás de tu experiencia favorita.</p>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<?php
			
				$stuffs = [
					/* [
						'nombre' => 'Anderson R.',
						'puesto' => 'Gerente General',
						'imagen' => 'images/stuff/stuff-img-01.jpg'
					], */
					[
						'nombre' => 'Andrea',
						'puesto' => 'Jefa de Cocina',
						'imagen' => 'images/stuff/stuff-img-02.jpg'
					],
					[
						'nombre' => 'Zheila',
						'puesto' => 'Camarera',
						'imagen' => 'images/stuff/stuff-img-03.jpg'
					]
				];
			foreach ($stuffs as $i => $stuff) {
			?>

				<div class="col-md-4 col-sm-6">
					<div class="our-team">
						<img src="<?= $stuffs[$i]['imagen'] ?>">
						<div class="team-content">
							<h3 class="title"><?= $stuffs[$i]['nombre'] ?></h3>
							<span class="post"><?= $stuffs[$i]['puesto'] ?></span>
							<!-- <ul class="social">
								<li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							</ul> -->
						</div>
					</div>
				</div>
			<?php
			}
			?>




		</div>
	</div>
</div>
<!-- End Stuff -->

<!-- Start Customer Reviews -->
<?php include 'reseñasGlobal.php' ?>
<!-- End Customer Reviews -->




<?php include './layouts/footer.php';
