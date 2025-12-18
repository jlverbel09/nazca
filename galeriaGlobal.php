<div class="gallery-box">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="heading-title text-center">
					<h2>Galería</h2>
					<p>Anticipa el sabor. Explora nuestra galería y déjate seducir por la esencia de nuestra propuesta.</p>
				</div>
			</div>
		</div>
		<div class="tz-gallery">
			<div class="row galeria">
				<?php

				for ($i = 1; $i <= 6; $i++) {
				?>

					<div class="col-sm-12 m-0 p-0">
						<a class="lightbox" href="images/galeria/<?= $i ?>.jpeg">
							<img class="img-fluid" src="images/galeria/<?= $i ?>.jpeg" alt="Gallery Images">
						</a>
					</div>
				<?php
				}
				?>
			</div>
		</div>
	</div>
</div>

