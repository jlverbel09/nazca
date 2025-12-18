<div class="menu-box">

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-title text-center">
                    <h2>Menú</h2>
                    <p>Una carta diseñada para recorrer el Perú, desde la frescura del mar hasta el calor de nuestra tradición</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="special-menu text-center">
                    <div class="button-group filter-button-group">
                        <button class="active" data-filter="*">Todo</button>
                        <button data-filter=".drinks">Cevichería</button>
                        <button data-filter=".lunch">Anticuchos/Brasería</button>
                        <button data-filter=".dinner">Criollos</button>
                        <button data-filter=".dinner">Kids</button>
                        <button data-filter=".dinner">Refrescos</button>
                        <button data-filter=".dinner">Esp. Marinos</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row special-list">

            <?php
            for ($i = 1; $i < 40; $i++) {
            ?>
                <div class="col-lg-4 col-md-6 special-grid drinks px-1">
                    <div class="gallery-single fix m-2">
                       <!--  <img src="images/menu/<?= $i ?>.jpeg" class="img-fluid" alt="Image"> -->
                        <img src="images/productos/<?= $i ?>.jpeg" class="img-fluid" alt="Image">
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