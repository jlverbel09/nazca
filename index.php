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
 <script>
	
	$.ajax({
		url: 'https://negocios.georkingweb.com/services/apis/generales/anuncio.php?accion=anuncioInicial&id_negocio=7',
		type: 'GET',
		success: function(response) {
			
			if (response.estado) {
				$('#modal .modal-body').html(`
					<img width="100%" src="https://negocios.georkingweb.com/${response.imagen}" alt="">
					<p class="mt-1 p-1">Descubre la auténtica experiencia peruana en cada plato y cóctel. ¡Esperamos verte pronto!</p>
				`);
				mostrarmodal();
			}
			else{
				console.log('No hay anuncio inicial para mostrar.');
			}

		},
	});
 </script>

<div class="modal" id="modal" tabindex="-1" role="dialog" style="z-index: 9999;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-dark justify-content-center">
				<div class="d-flex flex-column align-items-center">
					<h5 class="modal-title text-white h4 p-0 m-0">¡Bienvenido!</h5>
					<h6 class="text-principal h5 m-0 p-0">Disfruta la experiencia NAZCA!</h6>
				</div>
				<button type="button" class="close cerrarMenu" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body  text-center" style="background-color: #111111;">
		

			</div>
			<div class="modal-footer">
				<button class="btn btn-success col" onclick="window.open('https://api.whatsapp.com/send?phone=34612534077&text=Hola+%F0%9F%91%8B%F0%9F%8D%B3+%2ARestarante+Nazca%2A++%F0%9F%8D%B4%0AMe+gustarìa+pedir+el+menú+del+día', '_blank')"><i class="bi bi-whatsapp"> HAZ TU PEDIDO!</i></button>
				<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div>
<script>
	

	function mostrarmodal() {
		setTimeout(() => {

			$('#modal').modal('show');

		}, 1000);
	}




	$.ajax({
		url: 'https://negocios.georkingweb.com/services/apis/generales/negocio.php?accion=visitasNegocio&id_negocio=7',
		type: 'GET',
	});
</script>
<?php include './layouts/footer.php';
