<!DOCTYPE html>
<html lang="en">
<head>
<<<<<<< HEAD
    <title>Productos</title>
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


    
    <!-- <style>
=======
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
    <style>
>>>>>>> c4d6caa4806bead91d903f36abea3368c85bd6f9
        * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
}

body {
    height: 100vh;
    background-color: #a9aaac;
    color: #fff;
}

nav {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #24252a;
    padding-left: 2vw;
}

.cont-ul {
    display: flex;
    align-items: center;
<<<<<<< HEAD
}
=======
}   
>>>>>>> c4d6caa4806bead91d903f36abea3368c85bd6f9

li {
    list-style: none;
    cursor: pointer;
    padding: 1.5vw;
    transition:  all .3s ease 0s;
}

li:hover {
    background-color: #008849;
}

.develop {
    position: relative;
}

.ul-second {
    display: none;
    position: absolute;
    margin-top: 1.5vw;
}

.ul-second > li {
    width: 190px;
    transform: translateX(-20px);
    border-bottom:solid 1px #fff ;
    text-align: center;
    background-color: #24252a;
}

.ul-second > li:hover {
    background-color: #008849;
}

.develop:hover > .ul-second {
    display: block;
}

.ul-third {
    position: absolute;
    transform: translateX(100%);
    right: 0;
    top: 40%;
    display: none;
    background-color: #24252a;
}

.ul-third > li {
    padding: 1.5vw;
    border-bottom: solid 1px #fff;
}

.front:hover > .ul-third {
    display: block;
}

@media (max-width:900px) {
    .logo-danicodex {
        display: none;
    }
}
<<<<<<< HEAD
    </style> -->
 <!-- Start Top Nav -->

    <!-- Close Top Nav -->


    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">
        <a class="navbar-brand logo h1 align-self-center" href="{{ route('login.index') }}">
    <img src="{{ asset('media/NGRANDALGO fflllblck.png') }}"  alt="Nombre de tu imagen" width="120" height="120">
</a>
<style>
        body {
            margin: 0;
            padding: 0;
        }

        nav {
            /* Your styles for the navigation bar */
        }

        .center-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-top: 50px; /* Adjust the margin-top as needed */
            text-align: center;
        }

        /* Add any additional styling for your content here */
        .table-responsive {
            /* Your existing styles for the table responsiveness */
        }
        .color-del-texto {
            /* Your existing styles for text color */
        }
        .btn {
            /* Your existing styles for buttons */
        }
    </style>

            
            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                        <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Inicio</a>
                        </li>
                     
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('admin.productos')}}">Productos</a>
                        </li>
                        <li class="nav-item">
                             <a class="nav-link" href="{{route('admin.categoria')}}">Categoria</a>
                             {{-- <ul class="ul-third">
                            <li>CSS</li>
                            <li>HTML</li>
                            <li>JavaScript</li>
                        </ul> --}}
                        </li>
                        <li class="nav-item">
                             <a class="nav-link" href="{{route('admin.usuarios')}}">Usuarios</a>
                        </li>


                        <li class="nav-item">
                        <li> 
                            <a href="{{route('login.logout')}}" class="nav-link">Cerrar Sesión</a>
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
                                 </div>
            </div>

        </div>
    </nav>
    <!-- Close Header -->


    
                        <li class="nav-item">
                             <!-- <a class="nav-link" href=  "{{ route('login') }}" </a> -->
                        </li>
                    </ul>
                </div>
    </nav>
<body>
    <!-- <nav>
        <p class="logo-danicodex">ENGRANDA</p>
=======
    </style>
</head>
<body>
    <nav>
        <p class="logo-danicodex">ENGRANNDA</p>
>>>>>>> c4d6caa4806bead91d903f36abea3368c85bd6f9
        <ul class="cont-ul">
            <li><a href="#">Inicio</a></li>
            <li>Informacion</li>
            <li class="develop">
                Mantenimientos 
                <ul class="ul-second">
                    <li class="back"><a href="{{route('admin.productos')}}">Productos</a></li>
                    <li class="front">
                       <a href="{{route('admin.categoria')}}">Categoria</a>
                        {{-- <ul class="ul-third">
                            <li>CSS</li>
                            <li>HTML</li>
                            <li>JavaScript</li>
                        </ul> --}}
                    </li>
                    <li><a href="{{route('admin.usuarios')}}">Usuarios</a></li>
                </ul>
            </li>
            <li>Ayuda</li>
            <li> <a href="{{route('login.logout')}}" style="color: red; text-decoration: none;"><b>Cerrar Sesión</b></a></li>
        </ul>
<<<<<<< HEAD
    </nav> -->
=======
    </nav>
>>>>>>> c4d6caa4806bead91d903f36abea3368c85bd6f9

    <div>@yield('content')</div>
</body>
</html>