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

<!-- Start Reservation -->
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
										<input id="input_date" class="datepicker picker__input form-control" placeholder="A Nombre De*" name="date" type="text" value="" equired data-error="Please enter Date">
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<select class="custom-select d-block form-control" id="person" required data-error="Please select Person">
											<option disabled selected>Cantidad de personas*</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
										</select>
										<div class="help-block with-errors"></div>
									</div>
								</div>

								<div class="col-md-12 row m-0 p-0">
									<div class="col-md-6">
										<div class="form-group">
											<label>Fecha</label>
											<input id="input_date" class="datepicker picker__input form-control" placeholder="A Nombre De*" name="date" type="date" value="" equired data-error="Please enter Date">
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Hora</label>
											<select class="custom-select d-block form-control" id="person" required data-error="Please select Person">
												<option disabled selected>Seleccionar*</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
											</select>
											<div class="help-block with-errors"></div>
										</div>
									</div>
								</div>

								<div class="col-md-12">
									<div class="form-group">
										<textarea rows="5" id="input_time" class="time form-control picker__input" placeholder="Comentario o indicaciones adicionales" required data-error="Please enter time"></textarea>
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
									<button class="btn btn-common text-light" id="submit" type="submit">Reservar</button>
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
