<div class="customer-reviews-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="heading-title text-center">
					<h2>Reseñas de nuestros clientes</h2>
					<p>Historias de sabor contadas por quienes nos visitan. Descubre por qué nuestros clientes hacen de Nazca su lugar favorito.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 mr-auto ml-auto text-center">
				<div id="reviews" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner mt-4">
						<?php
						$reseñas = [
							
							[
								'nombre' => 'Andrea Ramirez Ramirez',
								'comentario' => 'Cada visita a Nazca es una experiencia culinaria inolvidable. La variedad de platos peruanos auténticos y la frescura de los ingredientes me hacen volver una y otra vez. El ambiente es cálido y el servicio excepcional.',
								'imagen' => 'https://lh3.googleusercontent.com/a-/ALV-UjX0tvl2tVKOMCCnP1GQfrTcBOpntOUK8TL1ao0NEU8czfNag4BB9g=w90-h90-p-rp-mo-ba5-br100'
							],
							[
								'nombre' => 'Juanma A.',
								'comentario' => 'Buena comida, ambiente muy tranquilo y muy buena atención. Entre semana tienen un menú diario por menos de 10 euros que está muy bien. Sin duda, un sitio para volver. 👍👍',
								'imagen' => 'https://lh3.googleusercontent.com/a-/ALV-UjVBOHhngMYNKNl-2YyoZsJxyrlaxiAEzDn5SJvFgS4CL8_76NKiEg=w90-h90-p-rp-mo-ba4-br100'
							],
							[
								'nombre' => 'Jorge Verbel Diaz',
								'comentario' => 'La atención en Nazca es impecable; el personal es muy amable y te asesora perfectamente con la carta. La comida es fresca y llena de sabor, especialmente el ceviche y el Pisco Sour. Un ambiente acogedor y un servicio rápido. ¡Totalmente recomendado!',
								'imagen' => 'images/profile/profile-1.jpg'
							]
						];
						for ($i = 0; $i < 3; $i++) {
							if ($i == 0) {
								$active = 'active';
							} else {
								$active = '';
							}
						?>

							<div class="carousel-item text-center <?= $active ?>">
								<div class="img-box p-1 border rounded-circle m-auto">
									<img class="d-block w-100 rounded-circle" src="<?= $reseñas[$i]['imagen'] ?>" alt="">
								</div>
								<h5 class="mt-4 mb-0"><strong class="h4 text-principal text-uppercase"><?= $reseñas[$i]['nombre'] ?></strong></h5>
								<!-- <h6 class="text-light m-0">Web Developer</h6> -->
								<p class="m-0 pt-3"><?= $reseñas[$i]['comentario'] ?></p>
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