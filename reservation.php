<?php include './layouts/header.php'; ?>
<!-- Start All Pages -->
<div class="all-page-title page-breadcrumb">
	<div class="container text-center">
		<div class="row">
			<div class="col-lg-12">
				<h1>Reservar</h1>
			</div>
		</div>
	</div>
</div>
<!-- End All Pages -->
<script>
	function realizarReserva() {
		var anombrede = document.getElementById('anombrede').value;
		var cantidadPersonas = document.getElementById('cantidadPersonas').value;
		var fecha = document.getElementById('fecha').value;
		var hora = document.getElementById('hora').value;
		var comentarios = document.getElementById('comentarios').value;

		if (anombrede == '') {
			alert('Ingresa el nombre de la persona a quien estará a cargo la reserva')
		} else if (cantidadPersonas == '') {
			alert('Selecciona la cantidad de personas')
		} else if (fecha == '') {
			alert('Selecciona la fecha de la reserva')
		} else if (hora == '') {
			alert('Selecciona la hora de la reserva')
		} else {
			window.open("https://api.whatsapp.com/send?phone=34640686489&text=%2A🍴Bienvenido%28a%29+a+Restaurante+Nazca+🧑🏻%E2%80%8D🍳🙂%2A%0ARealizar+mi+reserva%0A%0A%2AA+Nombre+de%3A%2A+" + anombrede + "%0A%2ACantidad+de+Personas%3A%2A++" + cantidadPersonas + "%0A%2AFecha%3A%2A++" + fecha + "%0A%2AHora%3A%2A+" + hora + "%0A%2ADetalles+Adicionales%3A%2A+" + comentarios, '_blank')

		}

	}
</script>
<!-- Start Reservation -->
<img class="icono3 pequeño" src="./images/icono3.png" alt="">
<img class="icono4 pequeño" src="./images/icono4.png" alt="">
<div class="reservation-box">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="heading-title text-center">
					<!-- <h2>Reserva</h2> -->
					<p>Realiza tu reserva aquí te estaremos esperando!</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-sm-12 col-xs-12">
				<div class="contact-block">
					<form id="contactForm">
						<div class="row justify-content-center">
							<div class="col-md-6">
								<h3 class="text-light">Datos de la Reserva</h3>
								<div class="col-md-12">
									<div class="form-group">
										<input id="anombrede" class="datepicker picker__input form-control" placeholder="A Nombre De*" name="date" type="text" value="" equired data-error="">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<select class="custom-select d-block form-control" id="cantidadPersonas" required data-error="Please select Person">
											<option disabled selected value="">Cantidad de personas*</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
											<option value="13">13</option>
											<option value="14">14</option>
											<option value="15">15</option>
											<option value="16">16</option>
											<option value="17">17</option>
											<option value="18">18</option>
											<option value="19">19</option>
											<option value="20">20</option>
										</select>
										<div class="help-block with-errors"></div>
									</div>
								</div>

								<div class="col-md-12 row m-0 p-0">
									<div class="col-md-6">
										<div class="form-group">
											<label>Fecha</label>
											<input id="fecha" class="datepicker picker__input form-control" name="date" type="date" value="" equired>
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Hora</label>
											<select class="custom-select d-block form-control" id="hora" required data-error="Please select Person">
												<option disabled selected value="">Seleccionar Hora*</option>
												<option value="12:00">12:00</option>
												<option value="13:00">13:00</option>
												<option value="14:00">14:00</option>
												<option value="15:00">15:00</option>
												<option value="16:00">16:00</option>
												<option value="17:00">17:00</option>
												<option value="18:00">18:00</option>
												<option value="19:00">19:00</option>
												<option value="20:00">20:00</option>
												<option value="21:00">21:00</option>
												<option value="22:00">22:00</option>
											</select>
											<div class="help-block with-errors"></div>
										</div>
									</div>
								</div>

								<div class="col-md-12">
									<div class="form-group">
										<textarea rows="5" id="comentarios" class="time form-control picker__input" placeholder="Comentario o indicaciones adicionales" required data-error="Please enter time"></textarea>
										<div class="help-block with-errors"></div>
									</div>
								</div>
							</div>
							<!-- <div class="col-md-6">
								<h3 class="text-light">Contact Details</h3>
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" placeholder="Your Email" id="email" class="form-control" name="email" required data-error="Please enter your email">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" placeholder="Your Numbar" id="phone" class="form-control" name="phone" required data-error="Please enter your Numbar">
										<div class="help-block with-errors"></div>
									</div>
								</div>
							</div> -->
							<div class="col-md-12">
								<div class="submit-button text-center">
									<button class="btn btn-common text-light" id="reserva" onclick="realizarReserva()" type="button">Reservar</button>
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
</div>
<!-- End Reservation -->

<!-- Start Customer Reviews -->
<?php include 'reseñasGlobal.php' ?>
<!-- End Customer Reviews -->


<?php include './layouts/footer.php';
