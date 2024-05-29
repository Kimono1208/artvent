<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

    <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/aos/aos.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  {{-- <link href="css/style.css" rel="stylesheet"> --}}


 <link href="/css/style.css" rel="stylesheet">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
        <!-- Styles -->
        <style>
            html {
    background-color: rgb(36, 45, 119) !important;
}
        </style>
    </head>
    <body class="antialiased">
          <header id="header" class="fixed-top d-flex align-items-center header-transparent">
            <div class="container d-flex align-items-center justify-content-between">

              <div class="logo">
                <h1><a href="/"><span>ArtVent</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="img/logo.png" alt="" class="img-fluid"></a>-->
              </div>

              <nav id="navbar" class="navbar">
                <ul >
                  <li><a class="nav-link scrollto active" href="welcome">Inicio</a></li>
                  <li><a class="nav-link scrollto" href="about">Acerca de</a></li>
                  <li><a class="nav-link scrollto" href="features">Caracteristicas</a></li>
                  <li><a class="nav-link scrollto" href="gallery">Galeria</a></li>
                  <li><a class="nav-link scrollto" href="team">Equipo</a></li>
                  <li><a class="nav-link scrollto" href="pricing">precios</a></li>
                  <li class="dropdown"><a href="#"><span>Mas opciones</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                      <li><a href="#">Mas opciones 1</a></li>
                      <li class="dropdown"><a href="#"><span>Mas opciones 2</span> <i class="bi bi-chevron-right"></i></a>
                        <ul>
                          <li><a href="#">Deep Drop Down 1</a></li>
                          <li><a href="#">Deep Drop Down 2</a></li>
                          <li><a href="#">Deep Drop Down 3</a></li>
                          <li><a href="#">Deep Drop Down 4</a></li>
                          <li><a href="#">Deep Drop Down 5</a></li>
                        </ul>
                      </li>
                      <li><a href="#">Drop Down 2</a></li>
                      <li><a href="#">Drop Down 3</a></li>
                      <li><a href="#">Drop Down 4</a></li>
                    </ul>
                  </li>
                  <li><a class="nav-link scrollto" href="#contact">Contacto</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
              </nav><!-- .navbar -->

            </div>
          </header><!-- End Header -->

          <!-- ======= Hero Section ======= -->
          <section id="hero">

            <div class="container">
              <div class="row justify-content-between">
                <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
                  <div data-aos="zoom-out">
                    <h1>Embellece tus Espacios Exteriores con <span>ArtVent Toldos</span></h1>
                    <h2>Tu Aliado Confiable para Toldos y Soluciones de Sombra de Calidad</h2>
                    <div class="text-center text-lg-start">
                        <a href="#about" class="btn-get-started scrollto">Explora Ahora</a>
                    </div>
                </div>
                </div>
                <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
                  <img src="img/hero-img.png" class="img-fluid animated" alt="">
                </div>
              </div>
            </div>

            <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
              <defs>
                <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
              </defs>
              <g class="wave1">
                <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
              </g>
              <g class="wave2">
                <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
              </g>
              <g class="wave3">
                <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
              </g>
            </svg>

          </section><!-- End Hero -->

          <main id="main">

            <!-- ======= About Section ======= -->
            <section id="about" class="about">
              <div class="container-fluid">

                {{-- <div class="row">
                  <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
                    <a href="https://www.youtube.com/watch?v=Ly_Uyeqwm-E" class="glightbox play-btn mb-4"></a>
                  </div> --}}

                  <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
                    <h3>Mejora tus Espacios con <span>ArtVent Toldos</span></h3>
                    <p>Ofrecemos soluciones innovadoras para proporcionar sombra y confort en tus espacios exteriores. Nuestros toldos están diseñados para satisfacer tus necesidades específicas, brindando elegancia y funcionalidad.</p>

                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon"><i class="bx bx-fingerprint"></i></div>
                        <h4 class="title"><a href="#">Toldos Personalizados</a></h4>
                        <p class="description">Diseñamos y fabricamos toldos a medida para adaptarse perfectamente a tu estilo y requisitos, garantizando calidad y durabilidad.</p>
                    </div>

                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon"><i class="bx bx-gift"></i></div>
                        <h4 class="title"><a href="#">Servicio Excepcional</a></h4>
                        <p class="description">Nuestro equipo comprometido está aquí para brindarte un servicio excepcional, desde la consulta inicial hasta la instalación y el soporte continuo.</p>
                    </div>

                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon"><i class="bx bx-atom"></i></div>
                        <h4 class="title"><a href="#">Variedad de Estilos</a></h4>
                        <p class="description">Explora nuestra amplia gama de estilos y materiales para encontrar el toldo perfecto que complemente tu espacio y refleje tu estilo único.</p>
                    </div>
                </div>
                </div>

              </div>
            </section><!-- End About Section -->

            <!-- ======= Features Section ======= -->
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

            </section><!-- End Features Section -->

            <!-- ======= Counts Section ======= -->
            <section id="counts" class="counts">
              <div class="container">

                <div class="row" data-aos="fade-up">

                    <div class="col-lg-3 col-md-6">
                        <div class="count-box">
                            <i class="ri-satisfied-line"></i>
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Clientes Satisfechos</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                        <div class="count-box">
                            <i class="ri-folder-line"></i>
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Proyectos Completados</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="ri-headphone-line"></i>
                            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Horas de Soporte</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="ri-group-line"></i>
                            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Colaboradores Dedicados</p>
                        </div>
                    </div>

                </div>

            </div>

            </section><!-- End Counts Section -->

            <!-- ======= Details Section ======= -->
            <section id="details" class="details">
              <div class="container">

                <div class="row content">
                    <div class="col-md-4" data-aos="fade-right">
                        <img src="img/details-1.png" class="img-fluid" alt="Toldo Detalle 1">
                    </div>
                    <div class="col-md-8 pt-4" data-aos="fade-up">
                        <h3>Mejora tus Espacios Exteriores con Nuestros Toldos Exclusivos</h3>
                        <p class="fst-italic">
                            Descubre cómo nuestros toldos innovadores pueden transformar tu espacio al aire libre, proporcionando sombra y estilo a medida.
                        </p>
                        <ul>
                            <li><i class="bi bi-check"></i> Diseño exclusivo para una estética única.</li>
                            <li><i class="bi bi-check"></i> Materiales resistentes y duraderos para protección a largo plazo.</li>
                            <li><i class="bi bi-check"></i> Fácil instalación y mantenimiento.</li>
                            <li><i class="bi bi-check"></i> Variedad de estilos y colores para adaptarse a tus preferencias.</li>
                        </ul>
                        <p>
                            Transforma tu espacio al aire libre con nuestros toldos de alta calidad, diseñados para satisfacer tus necesidades y añadir un toque de elegancia.
                        </p>
                    </div>
                </div>

                <!-- Repite este patrón para agregar más secciones si es necesario -->

            </div>

            </section><!-- End Details Section -->

            <!-- ======= Gallery Section ======= -->

            <section id="gallery" class="gallery">
              <div class="container">

                <div class="section-title" data-aos="fade-up">
                  <h2>Galeria</h2>
                  <p>Checa nuestros estilos</p>
                </div>

                <h2>Filtro por categorias</h2>
                <div id="todo" class="center">
                    <button onclick="filtcategories('all')">Mostrar todos</button>
                    <button data-category="evento">evento</button>
                    <button data-category="trabajo">trabajo</button>
                    <button data-category="luces">luces</button>
                    <button data-category="sin_luces">sin luces</button>
                    <button data-category="extras">extras</button>
                </div>

                <div class="row g-0" data-aos="fade-left">
                  <div class="col-lg-3 col-md-4">
                    <div class="gallery-item evento" data-aos="zoom-in" data-aos-delay="100">
                      <a href="img/gallery/gallery-1.jpg" class="gallery-lightbox">
                        <img src="img/gallery/gallery-1.jpg" alt="" class="img-fluid">
                      </a>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-4">
                    <div class="gallery-item trabajo" data-aos="zoom-in" data-aos-delay="150">
                      <a href="img/gallery/gallery-2.jpg" class="gallery-lightbox">
                        <img src="img/gallery/gallery-2.jpg" alt="" class="img-fluid">
                      </a>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-4">
                    <div class="gallery-item luces" data-aos="zoom-in" data-aos-delay="200">
                      <a href="img/gallery/gallery-3.jpg" class="gallery-lightbox">
                        <img src="img/gallery/gallery-3.jpg" alt="" class="img-fluid">
                      </a>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-4">
                    <div class="gallery-item sin_luces" data-aos="zoom-in" data-aos-delay="250">
                      <a href="img/gallery/gallery-4.jpg" class="gallery-lightbox">
                        <img src="img/gallery/gallery-4.jpg" alt="" class="img-fluid">
                      </a>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-4 extras">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="300">
                      <a href="img/gallery/gallery-5.jpg" class="gallery-lightbox">
                        <img src="img/gallery/gallery-5.jpg" alt="" class="img-fluid">
                      </a>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-4 luces">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="350">
                      <a href="img/gallery/gallery-6.jpg" class="gallery-lightbox">
                        <img src="img/gallery/gallery-6.jpg" alt="" class="img-fluid">
                      </a>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-4 evento">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="400">
                      <a href="img/gallery/gallery-7.jpg" class="gallery-lightbox">
                        <img src="img/gallery/gallery-7.jpg" alt="" class="img-fluid">
                      </a>
                    </div>
                  </div>

                  <div class="col-lg-3 col-md-4">
                    <div class="gallery-item" data-aos="zoom-in" data-aos-delay="450">
                      <a href="img/gallery/gallery-8.jpg" class="gallery-lightbox">
                        <img src="img/gallery/gallery-8.jpg" alt="" class="img-fluid">
                      </a>
                    </div>
                  </div>

                </div>

              </div>
            </section><!-- End Gallery Section -->
            <script>
            function filtcategories() {
                console.log("holaa")
            }
/*                 document.addEventListener("DOMContentLoaded", function() {
                    // Asignar eventos de clic a los botones de filtro
                    document.querySelectorAll('#todo button').forEach(function(button) {
                        button.addEventListener('click', function() {
                            filtcategories(this.dataset.category);
                        });
                    });

                function filtcategories(c) {
                    console.log("hola")
                var all = document.querySelectorAll(".gallery-item");
                all.forEach(i => {
                    if (c === 'all' || i.classList.contains(c)) {
                        i.style.display = "block";
                    } else {
                        i.style.display = "none";
                    }
                });
                }
                }) */
            </script>
            <!-- ======= Testimonials Section ======= -->
            <section id="testimonials" class="testimonials">
              <div class="container">

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="img/testimonials/testimonial-2.jpg" class="testimonial-img" alt="Cliente 1">
                                <h3>Marta Gómez</h3>
                                <h4>Cliente Satisfecho</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Los toldos de ArtVent han transformado completamente mi patio. Son de alta calidad y el servicio al cliente es excepcional. ¡Recomiendo ArtVent a todos!
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="img/testimonials/testimonial-1.jpg" class="testimonial-img" alt="Cliente 2">
                                <h3>Juan Pérez</h3>
                                <h4>Cliente Satisfecho</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    La variedad de estilos de toldos de ArtVent me permitió encontrar la opción perfecta para mi hogar. ¡Estoy muy contento con mi elección!
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="img/testimonials/testimonial-3.jpg" class="testimonial-img" alt="Cliente 3">
                                <h3>Laura Rodríguez</h3>
                                <h4>Cliente Satisfecho</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    La instalación profesional de los toldos de ArtVent superó mis expectativas. Ahora puedo disfrutar de mi terraza sin preocuparme por el sol.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <!-- Agrega más testimonios según sea necesario -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
            </section><!-- End Testimonials Section -->

            <!-- ======= Team Section ======= -->
            <section id="team" class="team">
              <div class="container">

                <div class="section-title" data-aos="fade-up">
                  <h2>Equipo</h2>
                  <p>Nuestro equipo</p>
                </div>

                <div class="row" data-aos="fade-left">

                  <div class="col-lg-3 col-md-6">
                      <div class="member" data-aos="zoom-in" data-aos-delay="100">
                          <div class="pic"><img src="img/team/team-2.jpg" class="img-fluid" alt="Equipo 1"></div>
                          <div class="member-info">
                              <h4>María López</h4>
                              <span>Directora Ejecutiva</span>
                              <div class="social">
                                  <a href=""><i class="bi bi-twitter"></i></a>
                                  <a href=""><i class="bi bi-facebook"></i></a>
                                  <a href=""><i class="bi bi-instagram"></i></a>
                                  <a href=""><i class="bi bi-linkedin"></i></a>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                      <div class="member" data-aos="zoom-in" data-aos-delay="200">
                          <div class="pic"><img src="img/team/team-1.jpg" class="img-fluid" alt="Equipo 2"></div>
                          <div class="member-info">
                              <h4>Carlos Rodríguez</h4>
                              <span>Gerente de Producto</span>
                              <div class="social">
                                  <a href=""><i class="bi bi-twitter"></i></a>
                                  <a href=""><i class="bi bi-facebook"></i></a>
                                  <a href=""><i class="bi bi-instagram"></i></a>
                                  <a href=""><i class="bi bi-linkedin"></i></a>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                      <div class="member" data-aos="zoom-in" data-aos-delay="300">
                          <div class="pic"><img src="img/team/team-4.jpg" class="img-fluid" alt="Equipo 3"></div>
                          <div class="member-info">
                              <h4>Andrea Martínez</h4>
                              <span>Director de Tecnología</span>
                              <div class="social">
                                  <a href=""><i class="bi bi-twitter"></i></a>
                                  <a href=""><i class="bi bi-facebook"></i></a>
                                  <a href=""><i class="bi bi-instagram"></i></a>
                                  <a href=""><i class="bi bi-linkedin"></i></a>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                      <div class="member" data-aos="zoom-in" data-aos-delay="400">
                          <div class="pic"><img src="img/team/team-3.jpg" class="img-fluid" alt="Equipo 4"></div>
                          <div class="member-info">
                              <h4>Luis Gómez</h4>
                              <span>Contador</span>
                              <div class="social">
                                  <a href=""><i class="bi bi-twitter"></i></a>
                                  <a href=""><i class="bi bi-facebook"></i></a>
                                  <a href=""><i class="bi bi-instagram"></i></a>
                                  <a href=""><i class="bi bi-linkedin"></i></a>
                              </div>
                          </div>
                      </div>
                  </div>

              </div>


              </div>
            </section><!-- End Team Section -->

            <!-- ======= Pricing Section ======= -->
            <section id="pricing" class="pricing">
              <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Nuestros Precios</h2>
                    <p>Consulta nuestras tarifas</p>
                </div>

                <div class="row" data-aos="fade-left">

                    <div class="col-lg-3 col-md-6">
                        <div class="box" data-aos="zoom-in" data-aos-delay="100">
                            <h3>Básico</h3>
                            <h4><sup>$</sup>0<span> / mes</span></h4>
                            <ul>
                                <li>Funcionalidad Aida</li>
                                <li>Necesario para feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li class="na">Pharetra massa</li>
                                <li class="na">Massa ultricies mi</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Comprar Ahora</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
                        <div class="box featured" data-aos="zoom-in" data-aos-delay="200">
                            <h3>Negocios</h3>
                            <h4><sup>$</sup>19<span> / mes</span></h4>
                            <ul>
                                <li>Funcionalidad Aida</li>
                                <li>Necesario para feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li class="na">Massa ultricies mi</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Comprar Ahora</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                        <div class="box" data-aos="zoom-in" data-aos-delay="300">
                            <h3>Desarrollador</h3>
                            <h4><sup>$</sup>29<span> / mes</span></h4>
                            <ul>
                                <li>Funcionalidad Aida</li>
                                <li>Necesario para feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li>Massa ultricies mi</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Comprar Ahora</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                        <div class="box" data-aos="zoom-in" data-aos-delay="400">
                            <span class="advanced">Avanzado</span>
                            <h3>Ultimate</h3>
                            <h4><sup>$</sup>49<span> / mes</span></h4>
                            <ul>
                                <li>Funcionalidad Aida</li>
                                <li>Necesario para feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li>Massa ultricies mi</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Comprar Ahora</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            </section><!-- End Pricing Section -->

            <!-- ======= F.A.Q Section ======= -->
            <section id="faq" class="faq section-bg">
              <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Preguntas Frecuentes</h2>
                    <p>Preguntas Frecuentes</p>
                </div>

                <div class="faq-list">
                  <ul>
                      <li data-aos="fade-up">
                          <i class="bx bx-help-circle icon-help"></i> 
                          <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">¿Qué tipos de toldos existen? 
                              <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i>
                          </a>
                          <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                              <p>
                                  Existen varios tipos de toldos, incluyendo toldos retráctiles, toldos fijos, toldos verticales y toldos vela. Cada tipo tiene sus propias ventajas según las necesidades específicas de sombra y protección.
                              </p>
                          </div>
                      </li>
              
                      <li data-aos="fade-up" data-aos-delay="100">
                          <i class="bx bx-help-circle icon-help"></i> 
                          <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">¿Cuál es la vida útil de un toldo? 
                              <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i>
                          </a>
                          <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                              <p>
                                  La vida útil de un toldo puede variar dependiendo del material y la calidad del mismo. Generalmente, los toldos de alta calidad pueden durar entre 5 a 15 años con el cuidado y mantenimiento adecuados.
                              </p>
                          </div>
                      </li>
              
                      <li data-aos="fade-up" data-aos-delay="200">
                          <i class="bx bx-help-circle icon-help"></i> 
                          <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">¿Cómo se limpia y mantiene un toldo? 
                              <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i>
                          </a>
                          <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                              <p>
                                  Para limpiar un toldo, es recomendable usar agua y jabón suave, evitando productos químicos agresivos. Se debe enjuagar bien y dejar secar completamente antes de retraerlo. Además, es importante revisar regularmente las estructuras y los mecanismos para asegurar su buen funcionamiento.
                              </p>
                          </div>
                      </li>
              
                      <li data-aos="fade-up" data-aos-delay="300">
                          <i class="bx bx-help-circle icon-help"></i> 
                          <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">¿Los toldos son resistentes al viento y la lluvia? 
                              <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i>
                          </a>
                          <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                              <p>
                                  Muchos toldos están diseñados para ser resistentes al agua y al viento. Sin embargo, en condiciones climáticas extremas es recomendable retraer el toldo para evitar daños. Existen modelos específicos que ofrecen mayor resistencia a estos elementos.
                              </p>
                          </div>
                      </li>
              
                      <li data-aos="fade-up" data-aos-delay="400">
                          <i class="bx bx-help-circle icon-help"></i> 
                          <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">¿Se pueden personalizar los toldos? 
                              <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i>
                          </a>
                          <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                              <p>
                                  Sí, los toldos se pueden personalizar en cuanto a tamaño, color, material y diseño. Muchas empresas ofrecen opciones de personalización para adaptarse a las necesidades específicas y la estética del espacio donde se instalará el toldo.
                              </p>
                          </div>
                      </li>
                  </ul>
              </div>
              

            </div>

            </section><!-- End F.A.Q Section -->

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
                                <p>artvent@example.com</p>
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
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Tu Nombre" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Tu Correo Electrónico" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" required>
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

          </main><!-- End #main -->

          <!-- ======= Footer ======= -->
          <footer id="footer">
            <div class="footer-top">
              <div class="container">
                  <div class="row">

                      <div class="col-lg-4 col-md-6">
                          <div class="footer-info">
                              <h3>Mas informacion</h3>
                              <p class="pb-3"><em>Ven conocenos, estamos al alcance de todos, nos ajustamos a tus precios.</em></p>
                              <p>
                                  A108 Adam Street <br>
                                  Guadalajara, JAL 535022, México<br><br>
                                  <strong>Teléfono:</strong> +52 33 1234 5678<br>
                                  <strong>Email:</strong> info@example.com<br>
                              </p>
                              <div class="social-links mt-3">
                                  <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                  <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                                  <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                                  <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                                  <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                              </div>
                          </div>
                      </div>

                      <div class="col-lg-2 col-md-6 footer-links">
                          <h4>Enlaces Útiles</h4>
                          <ul>
                              <li><i class="bx bx-chevron-right"></i> <a href="#">Inicio</a></li>
                              <li><i class="bx bx-chevron-right"></i> <a href="#">Acerca de nosotros</a></li>
                              <li><i class="bx bx-chevron-right"></i> <a href="#">Servicios</a></li>
                              <li><i class="bx bx-chevron-right"></i> <a href="#">Términos de servicio</a></li>
                              <li><i class="bx bx-chevron-right"></i> <a href="#">Política de privacidad</a></li>
                          </ul>
                      </div>

                      <div class="col-lg-2 col-md-6 footer-links">
                          <h4>Nuestros Servicios</h4>
                          <ul>
                              <li><i class="bx bx-chevron-right"></i> <a href="#">Diseño Web</a></li>
                              <li><i class="bx bx-chevron-right"></i> <a href="#">Desarrollo Web</a></li>
                              <li><i class="bx bx-chevron-right"></i> <a href="#">Gestión de Productos</a></li>
                              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                              <li><i class="bx bx-chevron-right"></i> <a href="#">Diseño Gráfico</a></li>
                          </ul>
                      </div>

                      <div class="col-lg-4 col-md-6 footer-newsletter">
                          <h4>Nuestro Boletín</h4>
                          <p>Te espermos, dudas o preguntas estamos a tu servicio</p>
                          <form action="" method="post">
                              <input type="email" name="email" placeholder="Tu Email"><input type="submit" value="Suscribirse">
                          </form>
                      </div>

                  </div>
              </div>
          </div>


            <div class="container">
              <div class="copyright">
                &copy; Copyright <strong><span>ArtVent</span></strong>. All Rights Reserved
              </div>
              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/ -->
                Designed by <a href="https://bootstrapmade.com/">Kimonkey</a>
              </div>
            </div>
          </footer><!-- End Footer -->

          <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
          <div id="preloader"></div>

          <!-- Vendor JS Files -->
          <script src="vendor/purecounter/purecounter_vanilla.js"></script>
          <script src="vendor/aos/aos.js"></script>
          <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
          <script src="vendor/glightbox/js/glightbox.min.js"></script>
          <script src="vendor/swiper/swiper-bundle.min.js"></script>
          <script src="vendor/php-email-form/validate.js"></script>

          <!-- Template Main JS File -->
          <script src="js/main.js"></script>

        </body>

        </html>
