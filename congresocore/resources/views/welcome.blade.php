<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Congreso 2023') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('images/brand/favicon.png') }}"/>
    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-uady">
        <a class="navbar-brand" href="#">
            <img height="40" src="{{ asset('images/brand/logo-white.svg') }}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active mx-4">
                    <a class="nav-link" href="#">Programa <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link" href="#">Carteles</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link" href="#">EN VIVO</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="{{ asset('images/welcome/image01.jpg') }}" alt="">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/welcome/image02.jpg') }}" alt="">
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('images/welcome/image03.jpg') }}" alt="">
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    <section class="swiper-slider">
        <!-- Swiper -->


    </section>

    <!-- Acerca de Nosotros -->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-ms-12 col-sm-12 col-xs-12 text-center">
                    <div class="section-header">
                        <h2>Acerca de Nosotros</h2>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="about-img">
                        <img src="{{ asset('images/welcome/about-us.jpg') }}" alt="Acerca de Nosotros">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="item-text">
                        <h4>¿Quiénes somos?</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste magni, voluptas quae consequatur eum labore voluptatum sed, ullam perspiciatis incidunt, vel eius repellendus nobis. Aliquid quo magni delectus esse porro!</p>
                        <h4>Nuestra Misión</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis sit dignissimos quidem consequatur ea, nostrum aliquam blanditiis labore, animi ipsum fugiat totam, ducimus voluptates dolore. Culpa sapiente voluptate rerum repellendus.
                            Porro itaque saepe qui totam ad, expedita debitis consequuntur. Suscipit nihil repellendus illo saepe sapiente nam laboriosam itaque asperiores quod! Inventore repellendus cupiditate placeat minima, commodi error illum ducimus at!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Carteles  -->
    <section id="carteles">
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
                        <!-- <div class="user">
                            <img src="https://yt3.ggpht.com/a/AGF-l7-0J1G0Ue0mcZMw-99kMeVuBmRxiPjyvIYONg=s900-c-k-c0xffffffff-no-rj-mo" alt="user" />
                            <div class="user-info">
                                <h5>July Dec</h5>
                                <small>2h ago</small>
                            </div>
                        </div> -->
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
                        <!-- <div class="user">
                            <img src="https://lh3.googleusercontent.com/ogw/ADGmqu8sn9zF15pW59JIYiLgx3PQ3EyZLFp5Zqao906l=s32-c-mo" alt="user" />
                            <div class="user-info">
                                <h5>Eyup Ucmaz</h5>
                                <small>Yesterday</small>
                            </div>
                        </div> -->
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
                        <!-- <div class="user">
                            <img src="https://studyinbaltics.ee/wp-content/uploads/2020/03/3799Ffxy.jpg" alt="user" />
                            <div class="user-info">
                                <h5>Carrie Brewer</h5>
                                <small>1w ago</small>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

    </section>


    <!-- universidades  -->
    <section class="universidades">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="container rounded">
                    <h1 class="text-center">Universidades Participantes:</h1>
                    <div class="slider">
                        <div class="logos">
                            <i class="fab fa-js fa-4x"></i>
                            <i class="fab fa-linkedin-in fa-4x"></i>
                            <i class="fab fa-dribbble fa-4x"></i>
                            <i class="fab fa-medium-m fa-4x"></i>
                            <i class="fab fa-github fa-4x"></i>
                        </div>
                        <div class="logos">
                            <i class="fab fa-js fa-4x"></i>
                            <i class="fab fa-linkedin-in fa-4x"></i>
                            <i class="fab fa-dribbble fa-4x"></i>
                            <i class="fab fa-medium-m fa-4x"></i>
                            <i class="fab fa-github fa-4x"></i>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- footer  -->
    <footer class="footer-14398">

        <div class="container">
            <div class="row mb-5">
                <div class="col-md-3">
                    <a href="#" class="footer-site-logo">
                        <img height="40" src="{{ asset('images/brand/logo-white.svg') }}" alt="">
                    </a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit officiis corporis optio natus. </p>
                </div>
                <div class="col-md-2 ml-auto">
                    <h3>Contáctanos</h3>
                    <ul class="list-unstyled links">
                        <li><a href="#">Sell online</a></li>
                        <li><a href="#">Features</a></li>
                        <li><a href="#">Examples</a></li>
                        <li><a href="#">Website editors</a></li>
                        <li><a href="#">Online retail</a></li>
                    </ul>
                </div>
                <div class="col-md-2 ml-auto">
                    <h3>Redes Sociales</h3>
                    <ul class="list-unstyled links">
                        <li><a href="#">Events</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Awards</a></li>
                        <li><a href="#">Testimonials</a></li>
                        <li><a href="#">Online retail</a></li>
                    </ul>
                </div>
                <div class="col-md-2 ml-auto">
                    <h3>Acerca de Nosotros</h3>
                    <ul class="list-unstyled links">
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Career</a></li>
                        <li><a href="#">Contacts</a></li>
                    </ul>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-12 pb-4">
                    <div class="line"></div>
                </div>
                <div class="col-md-6 text-md-left">
                    <ul class="list-unstyled link-menu nav-left">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms &amp; Conditions</a></li>
                        <li><a href="#">Code of Conduct</a></li>
                    </ul>
                </div>
                <div class="col-md-6 text-md-right">
                    <ul class="list-unstyled social nav-right">
                        <li><a href="#"><span class="icon-twitter"></span></a></li>
                        <li><a href="#"><span class="icon-instagram"></span></a></li>
                        <li><a href="#"><span class="icon-facebook"></span></a></li>
                        <li><a href="#"><span class="icon-pinterest"></span></a></li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-md-7">
                    <p><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, fuga. Ex at maxime eum odio quibusdam pariatur expedita explicabo harum! Consectetur ducimus delectus nemo, totam odit!</small></p>
                </div>
            </div>
        </div>

        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            allowTouchMove: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            loop: true,
        });
    </script>
</body>

</html>