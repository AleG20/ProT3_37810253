
    <!-- Jumbotron -->
    <div class="jumbotron text-center bg-light p-5">
        <h1 class="display-4">Acerca de Tecno Movil</h1>
        <p class="lead">Tecno Movil se dedica a la venta de celulares y accesorios de última tecnología, brindando el mejor servicio a nuestros clientes.</p>
        <hr class="my-4">
        <p>Ubicados en el corazón de la ciudad, estamos aquí para ayudarte a encontrar el mejor dispositivo móvil que se ajuste a tus necesidades.</p>
        <a class="btn btn-primary btn-lg" href="<?php echo base_url('/contacto'); ?>" role="button">Contáctanos</a>
    </div>



    <!-- Ubicación -->
    <div class="container my-5">
        <h2 class="text-center mb-4">Nuestra Ubicación</h2>
        <div class="row">
            <div class="col-md-6">
                <h5>Dirección</h5>
                <p>Irigoyen 1486, Corrientes Capital</p>
                <h5>Teléfono</h5>
                <p>3794763412</p>
                <h5>Correo Electrónico</h5>
                <p>info@tecnomovil.com</p>
            </div>
            <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d221.25014788518234!2d-58.832202!3d-27.4691857!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sar!4v1719021990555!5m2!1ses-419!2sar" width="600" height="450" style="border:0;" allowfullscreen=""
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
        </div>
    </div>

      <!-- Google Maps API -->
      <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
    <script>
        function initMap() {
            var location = {
                lat: -34.397,
                lng: 150.644
            };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 8,
                center: location
            });
            var marker = new google.maps.Marker({
                position: location,
                map: map
            });
        }
    </script>