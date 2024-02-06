@extends('/plantilla/plantilla')

@section('titulo','acerca de')

<section id="features" class="features">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
        <h2>Características</h2>
        <p>Descubre las Características</p>
    </div>

    <div class="row" data-aos="fade-left">
        <div class="col-lg-3 col-md-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
                <i class="ri-sun-line" style="color: #ffbb2c;"></i>
                <h3><a href="#">Protección Solar</a></h3>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                <i class="ri-water-flash-line" style="color: #5578ff;"></i>
                <h3><a href="#">Resistente al Agua</a></h3>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
                <i class="ri-tools-line" style="color: #e80368;"></i>
                <h3><a href="#">Instalación Profesional</a></h3>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                <i class="ri-shield-line" style="color: #e361ff;"></i>
                <h3><a href="#">Durabilidad Garantizada</a></h3>
            </div>
        </div>
    </div>

</div>

</section>


@section('contenido')
@endsection