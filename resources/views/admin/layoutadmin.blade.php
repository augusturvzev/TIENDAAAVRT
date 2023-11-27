<!DOCTYPE html>
<html lang="en">
<head>
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
}   

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
    </style>
</head>
<body>
    <nav>
        <p class="logo-danicodex">ENGRANNDA</p>
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
    </nav>

    <div>@yield('content')</div>
</body>
</html>