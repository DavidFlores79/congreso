<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Congreso 2023') }}</title>
    <!-- Metas -->
    <!-- metas  -->
    <meta property="og:title" content="Congreso Promocion Salud 2023">
    <meta property="og:description" content="Convoca a profesionales de la salud, investigadores, docentes, egresados y estudiantes con interés en la promoción de la salud a participar en el II Congreso Internacional Virtual de Promoción de la Salud.">
    <meta property="og:image" content="https://www.congresopromocionsalud.com/images/brand/ogimage.png">
    <meta property="og:url" content="https://www.congresopromocionsalud.com">
    <meta property="og:type" content="website">
    <meta name="author" content="David Flores Castillo - Glendy Pérez Góngora">
    <meta name="description" content="La Universidad Autónoma de Yucatán - Convoca a profesionales de la salud, investigadores, docentes, egresados y estudiantes con interés en la promoción de la salud a participar en el II Congreso Internacional Virtual de Promoción de la Salud.">
    <meta name="keywords" content="salud, promocion, congreso, enfermeria, universidad, diseño web, paginas web, congreso de salud, universidades, universidad de yucatan, internacional, inscripcion">
    <!-- Fuentes de Google  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;700;900&family=Roboto:wght@300;400;500;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('images/brand/favicon.png') }}" />
    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="{{ asset('js/animatescroll.js') }}"></script>
    <!-- Animate  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-uady">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img class="imagen-logo" height="60" src="{{ asset('images/brand/logo-white.svg') }}" alt="">
        </a>
        <button id="navbar-toggler" class="navbar-toggler" type="button" data-toggle="collapse" data-target="" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active mx-4">
                    <a class="nav-link">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active mx-4">
                    <a class="nav-link" data-toggle="modal" data-target="#convocatoriaModal">Convocatoria</a>
                </li>
                <li class="nav-item active mx-4">
                    <a id="menuInscripcion" class="nav-link">Inscripción</a>
                </li>
                <li class="nav-item active mx-4">
                    <a id="menuColaboradores" class="nav-link">Colaboradores</a>
                </li>
                <!-- <li class="nav-item mx-4">
                    <a class="nav-link" href="#">EN VIVO</a>
                </li> -->
            </ul>
        </div>

        <!-- Modal -->
        <div class="menuModal modal fade" id="menuModal" tabindex="-1" aria-labelledby="menuModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content text-center p-3 text-secondary">
                    <div class="modal-body">
                        <!--Menu-->
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active">Inicio <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="modal" data-target="#convocatoriaModal">Convocatoria</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="menuInscripcionMovil">Inscripción</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="menuColaboradoresMovil">Colaboradores</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </nav>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide" data-swiper-autoplay="5000">
                <img src="{{ asset('images/welcome/slider/image00.jpg') }}" alt="Imagenes de Congreso de Salud">
                <div class="congreso-fechas"></div>
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/welcome/slider/image01.jpg') }}" alt="Imagenes de Congreso de Salud">
                <!-- <div class="congreso-fechas"></div> -->
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/welcome/slider/image02.jpg') }}" alt="Imagenes de Congreso de Salud">
                <!-- <div class="congreso-fechas"></div> -->
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/welcome/slider/image03.jpg') }}" alt="Imagenes de Congreso de Salud">
                <!-- <div class="congreso-fechas"></div> -->
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/welcome/slider/image04.jpg') }}" alt="Imagenes de Congreso de Salud">
                <!-- <div class="congreso-fechas"></div> -->
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/welcome/slider/image05.jpg') }}" alt="Imagenes de Congreso de Salud">
                <!-- <div class="congreso-fechas"></div> -->
            </div>
            <!-- <div class="swiper-slide">
                <img src="{{ asset('images/welcome/slider/image06.jpg') }}" alt="">
            </div> -->
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <!-- Acerca de Nosotros -->
    <section id="about-us" class="section-padding">
        <div class="d-flex justify-content-between">
            <div class="nosotros_texto">
                <h3>La Facultad de Enfermería de la Universidad Autónoma de Yucatán</h3>
                <p>Convoca a profesionales de la salud, investigadores, docentes, egresados y estudiantes con interés en la promoción de la salud a participar en el:</p>
                <span class="nosotros-congreso">II Congreso Internacional Virtual de Promoción de la Salud</span>
                <!-- <p>"Aprendizajes multidiciplinarios y retos actuales para la equidad en salud"</p> -->
                <p></p>
                <p class="d-none d-xs-block d-md-block d-lg-block d-xl-block">"Aprendizajes multidisciplinarios y retos actuales para la equidad en salud".</p>
                <p class="d-none d-xs-block d-md-block d-lg-block d-xl-block">En este evento se tendrán actividades en donde el análisis crítico, la otredad y la divulgación de la investigación serán temas transversales para proponer estrategias que contribuyan a alcanzar la equidad en salud</p>
                <div class="nosotros-texto-fondo"></div>
            </div>
            <div class="nosotros-imagen">
                <div class="about-img">
                    <img src="{{ asset('images/welcome/about-us.jpg') }}" alt="Acerca de Nosotros">
                </div>
            </div>
        </div>
    </section>

    <div id="welcome" class="container-fluid padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <h3 class="display-4 animate__animated animate__fadeInUpBig">Acerca de Nosotros</h3>
                <!-- <hr> -->
                <div class="col-12">
                    <p>El II Congreso Internacional Virtual de Promoción de la Salud es un evento realizado por la Facultad de Enfermería de la Universidad Autónoma de Yucatán, que reúne a investigadores, tomadores de decisiones, personal de salud, personal del sector educativo, estudiantes y público en general de América Latina, el Caribe y España bajo la estrategia universal impulsada por la Organización Mundial de la Salud, de "Promoción de la Salud".</p>
                    <p>En esta segunda edición, contaremos con diversas ponencias magistrales en donde se intercambian experiencias de investigación y estrategias de diagnóstico, intervención y evaluación de promoción de la salud.</p>
                </div>
            </div>
        </div>
    </div>


    <!-- Carteles  -->
    <!-- <section id="carteles">
        <div class="row">
            <div class="col-ms-12 col-sm-12 col-xs-12 text-center">
                <div class="section-header">
                    <h2>carteles</h2>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="carteles">
            <div class="card-container">
                <div class="card">
                    <div class="card-header">
                        <img src="https://c0.wallpaperflare.com/preview/483/210/436/car-green-4x4-jeep.jpg" alt="rover" />
                    </div>
                    <div class="card-body">
                        <span class="tag tag-teal">DETERMINACIÓN SOCIAL</span>
                        <h4 class="m-2">EFECTO DEL CONFINAMIENTO PROVOCADO POR LA COVID-19 SOBRE LA ALIMENTACIÓN INTUITIVA EN ADULTOS</h4>

                        <div class="autores text-muted">Autores:</div>
                        <p>Anaid Guadalupe Martín Díaz (Alberto González Jiménez, Ángel Patricio Hernández Nieves, Sarai Ramirez Colina)</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <img src="https://www.newsbtc.com/wp-content/uploads/2020/06/mesut-kaya-LcCdl__-kO0-unsplash-scaled.jpg" alt="ballons" />
                    </div>
                    <div class="card-body">
                        <span class="tag tag-purple">PROMOCIÓN DE LA SALUD</span>
                        <h4 class="m-2">PROGRAMA: MEJORAR EL ESTADO DE NUTRICIÓN DE POBLACIÓN VULNERABLE DE OAXACA, A PARTIR DE LA IMPLEMENTACIÓN DE DIFERENTES ACCIONES.</h4>
                        <div class="autores text-muted">Autores:</div>
                        <p>María del Refugio Carrasco Quintero (Trinidad Cortés Pérez, José Antonio Roldan Amaro)</p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <img src="https://images6.alphacoders.com/312/thumb-1920-312773.jpg" alt="city" />
                    </div>
                    <div class="card-body">
                        <span class="tag tag-pink">PROMOCIÓN DE LA SALUD</span>
                        <h4 class="m-2">ACCIONES DE EDUCACIÓN PARA LA SALUD DIRIGIDAS A PUÉRPERAS EN LA ATENCIÓN PRIMARIA DE SALUD EN PERIODO DE PANDEMIA</h4>
                        <div class="autores text-muted">Autores:</div>
                        <p>Camila Patricia Lisboa Rauber</p>
                    </div>
                </div>
            </div>
        </div>

    </section> -->


    <!-- universidades  -->
    <section id="colaboradores" class="universidades">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="container rounded">
                    <h3 class="text-center">Colaboradores</h3>
                    <div class="slider">
                        <div class="logos">
                            <img src="{{ asset('images/welcome/schools/school01.png') }}" alt="Facultad de Enfermeria UADY">
                            <img src="{{ asset('images/welcome/schools/school02.png') }}" alt="Facultad de Enfermeria UADY">
                            <img src="{{ asset('images/welcome/schools/school03.png') }}" alt="Facultad de Enfermeria UADY">
                            <img src="{{ asset('images/welcome/schools/school04.png') }}" alt="Facultad de Enfermeria UADY">
                            <img src="{{ asset('images/welcome/schools/school05.png') }}" alt="Facultad de Enfermeria UADY">
                            <img src="{{ asset('images/welcome/schools/school01.png') }}" alt="Facultad de Enfermeria UADY">
                            <img src="{{ asset('images/welcome/schools/school02.png') }}" alt="Facultad de Enfermeria UADY">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Modal Convocatoria -->
    <div class="modal fade" id="convocatoriaModal" tabindex="-1" aria-labelledby="convocatoriaModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div>
                        <embed id="pdf-convocatoria" src="https://drive.google.com/viewerng/viewer?embedded=true&url=https://congresopromocionsalud.com/pdf/Convocatoria_Convocatoria%20congreso%20240223.pdf">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Convocatoria -->

    <!-- Modal Inscripcion -->
    <div class="inscripcionModal modal fade" id="inscripcionModal" tabindex="-1" aria-labelledby="inscripcionModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
            <div class="modal-content text-center">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div>
                        <embed id="pdf-inscripcion" src="https://drive.google.com/viewerng/viewer?embedded=true&url=https://congresopromocionsalud.com/pdf/Inscripci%C3%B3n_Convocatoria%20congreso%20240223.pdf">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Modal Inscripcion -->

    <!-- footer  -->
    <footer class="footer-14398">

        <div class="container">
            <div class="row mb-5 text-center">
                <div class="col-md-4">
                    <a href="#" class="footer-site-logo">
                        <img height="75" src="{{ asset('images/brand/logo-white2.svg') }}" alt="">
                    </a>
                    <p>"Aprendizajes multidiciplinarios y retos actuales para la equidad en salud" </p>
                </div>
                <div class="col-md-4 text-center">
                    <h3>Contáctanos</h3>
                    <ul class="list-unstyled links">
                        <li><a href="">Facultad de Enfermería</a></li>
                        <li><a href="">Calle 90 SN Centro</a></li>
                        <li><a class="congreso-mail" href="mailto:congreso_promocionsalud@correo.uady.mx">congreso_promocionsalud@correo.uady.mx</a></li>
                        <!-- <li><a href="tel:9999242216">Tel. (9999) 24-22-16</a></li> -->
                    </ul>
                </div>
                <div class="col-md-4 text-center">
                    <h3>Diseñado por</h3>
                    <ul class="list-unstyled links">
                        <li><a href="https://enlacetecnologias.mx/" target="_blank">Enlace Tecnologías - Versión 1.1.0</a></li>
                        <li>© {{ date('Y') }} Copyright</li>
                    </ul>
                </div>
            </div>

        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>