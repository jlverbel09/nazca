<?php include './layouts/header.php'; ?>

<!-- Start All Pages -->
<div class="all-page-title page-breadcrumb">
	<div class="container text-center">
		<div class="row">
			<div class="col-lg-12">
				<h1>Contáctanos</h1>
			</div>
		</div>
	</div>
</div>
<!-- End All Pages -->

<script>
	function enviarMensaje() {
		var nombre = document.getElementById('nombreCompleto').value;
		var mensaje = document.getElementById('mensaje').value;

		if (nombre == '') {
			alert('Ingresa tu nombre')
		} else if (mensaje == '') {
			alert('Ingresa tu mensaje')
		} else {
			window.open("https://api.whatsapp.com/send?phone=34640686489&text=Hola+%F0%9F%91%8B%F0%9F%8D%B3+%2ARestarante+Nazca%2A++%F0%9F%8D%B4%0AMi+nombre+es+" + nombre + "%0AMensaje%3A+" + mensaje, '_blank')

		}

	}
</script>
<!-- Start Contact -->
<div class="map-full">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6074.180914581879!2d-3.6480157245163785!3d40.42899585489352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422f43c5deb5b5%3A0x2af800cb0987d919!2sNazca%20Restaurante!5e0!3m2!1ses!2ses!4v1766075452944!5m2!1ses!2ses" style="border:0; width: 100%; height: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<img class="icono3 pequeño" src="./images/icono3.png" alt="">
<img class="icono4 pequeño" src="./images/icono4.png" alt="">
<div class="contact-box">
	<div class="container">
		<div class="row">

			<div class="col-lg-12">
				<div class="heading-title text-center">
					<h2>Contáctanos</h2>
					<p>¡Estamos cerca de ti! ¿Dudas o reservas? Envíanos un mensaje y vive la experiencia NAZCA.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<form id="contactForm">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" id="nombreCompleto" name="name" placeholder="Nombre Completo" required data-error="Please enter your name">
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<!-- <div class="col-md-12">
							<div class="form-group">
								<input type="text" placeholder="Email" id="email" class="form-control" name="name" required data-error="Please enter your email">
								<div class="help-block with-errors"></div>
							</div>
						</div> -->
						<div class="col-md-12">
							<div class="form-group">
								<textarea class="form-control" id="mensaje" placeholder="Tu mensaje" rows="4" data-error="Escribe tu mensaje" required></textarea>
								<div class="help-block with-errors"></div>
							</div>
							<div class="submit-button text-center">
								<button class="btn btn-common text-light" id="contactar" onclick="enviarMensaje()" type="button">Enviar Mensaje</button>
								<div id="msgSubmit" class="h3 text-center hidden"></div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- End Contact -->

<?php include './layouts/footer.php' ?>

<script src="js/jquery.mapify.js"></script>
<script>
	/* $('.map-full').mapify({
			points: [
				{
					lat: 40.7143528,
					lng: -74.0059731,
					marker: true,
					title: 'Marker title',
					infoWindow: 'Yamifood Restaurant'
				}
			]
		});	 */
</script>