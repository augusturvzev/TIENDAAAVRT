<!DOCTYPE html>
<html lang="en">

<head>
    <title>HomeEngrannda</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="{{ asset('media/NGRANDALGO fflllblck.png') }}" >
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('media/NGRANDALGO fflllblck.png') }}">
    <!-- Nuevas rutas para las imágenes -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/templatemo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
</head>

<body>
    <!-- Start Top Nav -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:engrannda@gmail.com">engrannda@gmail.com</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:943535773">943535773</a>
                </div>
                <div>
                    <a class="text-light" href="https://fb.com/templatemo" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin fa-sm fa-fw"></i></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Top Nav -->


    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

        <a class="navbar-brand logo h1 align-self-center" href="{{ route('login.index') }}">
    <img src="{{ asset('media/NGRANDALGO fflllblck.png') }}" alt="Nombre de tu imagen" width="120" height="120">
</a>


            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                        <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('nosotros') }}">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('productos.show') }}">Productos</a>
                        </li>
                        <li class="nav-item">
                             <a class="nav-link" href="{{ route('contacto') }}">Contacto</a>
                        </li>
                        <li class="nav-item">
                             <a class="nav-link" href="{{ route('login') }}">Iniciar Sesión</a>
                        </li>
                        <li class="nav-item">
                             <!-- <a class="nav-link" href=  "{{ route('login') }}" </a> -->
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                            <div class="input-group-text">
                                <i class="fa fa-fw fa-search"></i>
                            </div>
                        </div>
                    </div>
                    <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                        <i class="fa fa-fw fa-search text-dark mr-2"></i>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="#">
                        <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                        </a>
                    <a class="nav-icon position-relative text-decoration-none" href="#">
                        <i class="fa fa-fw fa-user text-dark mr-3"></i>
                    </a>
                </div>
            </div>

        </div>
    </nav>
    <!-- Close Header -->

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>



    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" src="{{ asset('media/banner_img_01.jpg') }}" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success">Computadoras y Laptops</h1>
                                <h3 class="h2">¡Haz de la tecnología una aliada con nuestros dispositivos avanzados!</h3>
                                <p>
                                Explora la innovación en tecnología con nuestra amplia selección de equipos. 
                                Cumplen con los estándares más altos, garantizando durabilidad y seguridad. Además, brindamos soporte técnico, sólidas garantías y políticas de devolución para una experiencia sin complicaciones.</a>,
                                  
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" src="{{ asset('media/banner_img_02.jpg') }}" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">Equipos Medicos</h1>
                                <h3 class="h2">¡Calidad y precisión al alcance de tu mano!</h3>
                                <p>
                                    Descubre equipos médicos de última generación con nosotros.Diseñados para ofrecer resultados precisos y confiables. 
                                    Cumplen con las normativas, garantizando durabilidad y seguridad. Ofrecemos soporte técnico, garantías sólidas y políticas de devolución para una experiencia sin preocupaciones.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" src="{{ asset('media/banner_img_03.jpg') }}" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1"> Equipos de Protección Personal (EPP)</h1>
                                <h3 class="h2">¡Eleva la seguridad en tu entorno laboral con nuestros equipos EPP de vanguardia!</h3>
                                <p>
                                Sumérgete en la seguridad con nuestra gama de Equipos de Protección Personal (EPP). Desde cascos hasta guantes y equipos especializados, nuestros productos están diseñados para brindar una protección efectiva y cumplen con los más altos estándares de seguridad. Garantizamos durabilidad y confiabilidad para enfrentar cualquier desafío. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->


    <!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Mas de nuestros productos </h1>
                <p>
                Estamos comprometidos con ofrecerte soluciones que marquen la diferencia. ¡Encuentra lo que necesitas para avanzar con confianza!
                </p>
            </div>
        </div>
        <div class="row">
        <div class="col-12 col-md-4 p-5 mt-3">
    <!-- Corrección de la ruta de la imagen -->
    <a href="#"><img src="{{ asset('media/category_img_01.jpg') }}" class="rounded-circle img-fluid border"></a>
    <h5 class="text-center mt-3 mb-3">Articulos de Limpieza</h5>
    <p class="text-center"><a class="btn btn-success" href="{{ route('productos.show') }}">Mas info</a></p>
</div>


<div class="col-12 col-md-4 p-5 mt-3">  
    <!-- Corrección de la ruta de la imagen -->
    <a href="#"><img src="{{ asset('media/category_img_02.png') }}" class="rounded-circle img-fluid border"></a>
    <h2 class="h5 text-center mt-3 mb-3">Tintas e Impresoras</h2>
    <p class="text-center"><a class="btn btn-success" href="{{ route('impresoras') }}">Mas info</a></p>
   

</div>
<div class="col-12 col-md-4 p-5 mt-3">
    <!-- Corrección de la ruta de la imagen -->
    <a href="#"><img src="{{ asset('media/papelbond.jpg') }}" class="rounded-circle img-fluid border"></a>
    <h2 class="h5 text-center mt-3 mb-3">Art.Escritorio</h2>
    <p class="text-center"><a class="btn btn-success" href="{{ route('articulos-escritorio') }}" >Mas Info</a></p>
</div>
        </div>
    </section>
    <!-- End Categories of The Month -->


    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Nuestros Servicios</h1>
                    <p>
                    Descubre con nosotros la atención personalizada y el apoyo técnico que te brindarán la confianza que necesitas. 
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                        <img src="{{ asset('media/pintado.jpg') }}" class="card-img-top" alt="...">

                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                           
                             
                            </ul>
                            <a href="{{ route('sistemaE') }}" class="h2 text-decoration-none text-dark">Servicio de Construccion pintado y edificaciones</a>
                            <p class="card-text">
                            Nuestro equipo de expertos en construcción se compromete a ofrecer proyectos sólidos y duraderos. Desde renovaciones hasta nuevas construcciones, 
                            manejamos cada fase con precisión y atención a los detalles, asegurándonos de que cada estructura sea segura, funcional y estéticamente agradable.
                            </p>
                            <p class="text-muted">Reviews (24)</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                        <img src="{{ asset('media/sistelectrico.jpg') }}" class="card-img-top" alt="...">

                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                               
                            </ul>
                            <a href="{{ route('mueblesM') }}" class="h2 text-decoration-none text-dark">Mantenimiento Profesional para Instalaciones Electricas </a>
                            <p class="card-text">
                            Nuestro servicio de mantenimiento profesional para instalaciones eléctricas ofrece tranquilidad y eficiencia. Nuestro equipo altamente capacitado realiza inspecciones exhaustivas,
                             abordando problemas potenciales mediante mantenimiento preventivo, ajustes de conexiones y detección temprana de desgastes. Además, proponemos actualizaciones y 
                             mejoras para aumentar la eficiencia y seguridad. Respondemos rápidamente a cualquier problema con reparaciones eficientes y cumplimos con normativas locales.   </p>
                            <p class="text-muted">Reviews (48)</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop-single.html">
                        <img src="{{ asset('media/muebles.jpg') }}" class="card-img-top" alt="...">

                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                         
                            </ul>
                            <a href="{{ route('mueblesM') }}" class="h2 text-decoration-none text-dark">Comercializacion de Muebles de Melamina </a>
                            <p class="card-text">                          
                                Bienvenido a nuestra emocionante propuesta de comercialización de muebles de melamina, donde fusionamos diseño y calidad para ofrecerte una experiencia excepcional. Nuestra variada gama abarca desde estilos modernos hasta clásicos, adaptándose a cualquier decoración residencial o comercial. La durabilidad es nuestra firma, con muebles resistentes a arañazos, manchas y abrasiones, garantizando un atractivo duradero y fácil mantenimiento. Nos destacamos por la personalización a medida, ajustando colores, acabados y dimensiones para crear muebles perfectamente adaptados a tus necesidades y espacio. 
                            </p>
                            <p class="text-muted">Reviews (74)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Product -->


    <!-- Start Footer -->
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-success border-bottom pb-3 border-light logo">Sobre Nosotros</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            D.GREGORIO ALBARRACIN
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:010-020-0340">943535993</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:info@company.com">engrannda@gmail.com</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Productos</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                    <li><a class="text-decoration-none" href="{{ route('articulos-limpieza') }}">Articulos de limpieza</a></li>
                            
                            <li><a class="text-decoration-none" href="{{ route('articulos-escritorio') }}">Articulos de escritorio</a></li>
                                                        
                            <li><a class="text-decoration-none" href="{{ route('mobiliario-oficina') }}">Mobiliario de oficina</a></li>
                            
       
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Servicios </h2>
                    <ul class="list-unstyled text-light footer-link-list">
                    <li><a class="text-decoration-none" href="{{ route('sistemaE') }}">Mantenimiento Profesional para Instalaciones Electricas</a></li>
                        <li><a class="text-decoration-none" href="{{ route('mueblesM') }}">Comercializacion de Muebles de Melamina</a></li>
                        <li><a class="text-decoration-none" href="{{ route('construccioP') }}">Servicio de Construccion pintado y edificaciones</a></li>
                    </ul>
                </div>

            </div>

            <div class="row text-light mb-4">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>
                <div class="col-auto me-auto">
                    <ul class="list-inline text-left footer-icons">
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i class="fab fa-twitter fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-auto">
                    <label class="sr-only" for="subscribeEmail">Email </label>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control bg-dark border-light" id="subscribeEmail" placeholder="Email address">
                        <div class="input-group-text btn-success text-light">Enviar</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light">
        
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-1.2.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/templatemo.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <!-- End Script -->
</body>

    <!-- End Script -->
</body>

</html>