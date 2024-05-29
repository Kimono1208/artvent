@extends('/plantilla/plantilla')

@section('titulo', 'contacto')

@section('contenido')
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h2>Contacto</h2>
            <p>Contáctenos</p>
        </div>

        <div class="row">

            <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
                <div class="info">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Ubicación:</h4>
                        <p>Calle Principal, Colonia Centro, Guadalajara, Jalisco, México</p>
                    </div>

                    <div class="email">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>artvent@gmail.com</p>
                    </div>

                    <div class="phone">
                        <i class="bi bi-phone"></i>
                        <h4>Llamada:</h4>
                        <p>+52 33 1234 5678</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Tu Nombre" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Tu Correo Electrónico" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto"
                            required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Mensaje" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Cargando</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Tu mensaje ha sido enviado. ¡Gracias!</div>
                    </div>
                    <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
                </form>
            </div>


</section><!-- End Contact Section -->


@endsection
