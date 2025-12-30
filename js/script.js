$.ajax({
    url: 'https://georkingweb.com/negocios/services/apis/generales/productos.php?accion=listProductos&id_negocio=7',
    type: 'GET',
    dataType: 'json',
    beforeSend: function() {
        $('#menu-loading').show();
    },
    success: function (respuesta) {
        $('#menu-loading').hide();
        let listplato = '';

        // Función para normalizar texto: minúsculas y sin acentos
        function normalizeText(text) {
            return text.toLowerCase()
                .normalize('NFD')
                .replace(/[\u0300-\u036f]/g, '');
        }

        respuesta.forEach(plato => {
            let categoria = normalizeText(plato.categoria || '');
           listplato += `
                <div class="col-lg-4 col-md-6 special-grid ${categoria} px-1">
                    <div class="gallery-single fix m-2">
                        <img src="${plato.imagen_url || 'images/productos/1.jpeg'}" class="img-fluid" alt="${plato.nombre}">
                        <div class="why-text">
                            <h4>${plato.nombre}</h4>
                            <p>${plato.descripcion}</p>
                            <h5> €${plato.precio}</h5>
                        </div>
                    </div>
                </div>`;
        });

        // 1. Insertamos el HTML en el contenedor
        var $container = $('.special-list'); 
        $container.html(listplato);

        // 2. Configuramos los botones de filtro
        $('.special-menu').off('click', 'button').on('click', 'button', function () {
            $(this).addClass('active').siblings().removeClass('active');
            var filterValue = $(this).attr('data-filter');
            if (filterValue === '*') {
                $('.special-grid').show();
            } else {
                $('.special-grid').hide();
                $(filterValue).show();
            }
        });
    },
    error: function (jqXHR, textStatus, errorThrown) {
        $('#menu-loading').html('Error al cargar el menú.');
        console.error("Error en la petición de Nazca: " + textStatus, errorThrown);
    }
});