<!DOCTYPE html>
<html lang="en">

<head>
<<<<<<< HEAD
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/loginadmin.css') }}">
    <title>Login-Admin</title>
   
</head>

<body>
 
    <div class="header">
        <img src="{{ asset('img/senati.png') }}" alt="">
=======
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title> -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Registrate con nosotros </title>
    <style>
   body {
            margin: 0;
            padding: 0;
            background-image: href="{{ asset('media/fondologin.png') }}"; /* Reemplaza 'URL_DE_LA_IMAGEN' con la URL de tu imagen */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            font-family: Arial, sans-serif; /* Puedes cambiar la fuente según tus preferencias */
            /* Otros estilos para el contenido de la página */
        }


    </style>
</head>

<body>
<img src="{{ asset('media/fondologin.png') }}" alt="1200x860">
    <div class="header">
        
        
>>>>>>> c4d6caa4806bead91d903f36abea3368c85bd6f9
    </div>
    <section>
        <div class="loginForm">
            <div class="login">
                <h1>Iniciar Sesión</h1>
            </div>
            <form action="{{route('login.login')}}" method="post" class="inputForm">
                @csrf
           
                <div class="username">
                    <div class="userform">
                        <i class="fa-solid fa-user" style="color: #22d3f;"></i>
                        <input type="text" name="email" id="user" placeholder="Correo">

                    </div>
                </div>
                <div class="pass">
                    <div class="passForm">
                        <i class="fa-solid fa-lock" style="color: #22d3f;"></i>
                        <input type="password" name="contrasena" id="pass" placeholder="Contraseña">

                    </div>
                </div>
                <button id="loginBtn" type="submit">Login</button>
            </form>
       
        </div>
    </section>
<<<<<<< HEAD


    <style>

body, h1, h2, h3, p, input, button {
    margin: 0;
    padding: 0;
}

body {
    font-family: 'Arial', sans-serif;
    background-color: #f2f2f2;
}

.header {
    text-align: center;
    padding: 20px;
}

.header img {
    max-width: 100%;
    height: auto;
}

section {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.loginForm {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    width: 300px;
}

.login {
    background-color: #22d3f;
    color: #fff;
    padding: 20px;
    text-align: center;
}

.login h1 {
    font-size: 20px;
    color: #000; /* Change text color to black */
}

.inputForm {
    padding: 20px;
}

.username,
.pass {
    margin-bottom: 15px;
}

.userform,
.passForm {
    display: flex;
    align-items: center;
    border: 1px solid #ccc;
    border-radius: 4px;
    padding: 8px;
}

.fa-user,
.fa-lock {
    margin-right: 10px;
}

input {
    flex: 1;
    border: none;
    outline: none;
}

button {
    background-color: #22d3f;
    color: #fff;
    border: none;
    padding: 10px 15px;
    font-size: 16px;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #1a9fe4;
}
    </style> 

    
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
=======
    <style>
        body {
            display: grid;
            grid-template-columns: 1fr;
            grid-template-rows: 90px 1fr;
            height: 100vh;
          
            background-image: url('../img/fondoadmin2.jpg');
            background-repeat: no-repeat;
            background-size: 100% 100%;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif
        }
        .header {
            position: absolute;
            top: 20px;
            left: 20px;
        }

        .header img {
            width: 1200px;
            /* Ajusta el tamaño de la imagen según tus preferencias */
         }

        section {
            grid-column: 1/2;
            grid-row: 2/3;
            display: flex;
            align-items: center;
            justify-content: center;

        }

        .loginForm {
            display: grid;
            grid-template-columns: 1/2;
            grid-template-rows: 100px 200px 20px;
            border-radius: 20px;
            border: 2px solid rgb(49, 49, 49);
            width: 350px;
            height: 350px;
            background-color: rgba(251, 247, 247, 0.388);
            backdrop-filter: blur(20px);
            box-shadow: 2px 5px 15px black;
        }

        .login {
            grid-column: 1/2;
            grid-row: 1/2;
            display: flex;
            justify-content: center;
            align-items: center;
            color: rgb(10, 10, 10);
        }

        .inputForm {
            grid-column: 1/2;
            grid-row: 2/3;
            display: grid;
            align-items: center;
            justify-content: center,

        }

        .userForm {
            border-bottom: 1px solid rgb(72, 71, 71);
            background-color: transparent;
            padding-bottom: 3px;
        }

        #user {
            background-color: transparent;
            border: none;
            outline: none;
            font-size: 15px;
            transition: all 0.3 ease;
            margin-left: 5px;
            letter-spacing: 2px;
            border-bottom: 1px solid rgb(72, 71, 71);

        }

        #user::placeholder {
            color: black;
            font-size: 160px;
        }

        .login {
            grid-column: 1/2;
            grid-row: 1/2;
            display: flex;
            justify-content: center;
            align-items: center;
            color: rgb(10, 10, 10);


        }

        .inputForm {
            grid-column: 1/2;
            grid-row: 2/3;
            display: grid;
            align-items: center;
            justify-content: center;

        }

        .userForm,
        .passForm {
           
            background-color: transparent;
            padding-bottom: 3px;

        }

        #user,
        #pass {
                background-color: transparent;
                border: none;
                outline: none;
                font-size: 15px;
                transition: all 0.3s ease;
                margin-left: 5px;
                letter-spacing: 2px;
                border-bottom: 1px solid rgb(72, 71, 71);
        }

        #user::placeholder,
        #pass::placeholder {
            color: black;
            font-size: 16px;
            border-bottom: 1px solid rgb(72, 71, 71);
            /* Esta línea de estilo debe eliminarse para que no haya una segunda línea en el input de contraseña */
            background-color: transparent;
            padding-bottom: 3px;
            /* Esta línea de estilo debe eliminarse para que no haya una segunda línea en el input de contraseña */
        }

        #loginBtn {
            background-color: rgb(19, 19, 19);
            color: whitesmoke;
            font-size: 16px;
            height: 35px;
            border: none;
            outline: none;
            border-radius: 10px;
            cursor: pointer;
            margin: 10px;
            margin-top: -10px;

        }

        #loginBtn:active {
            background-color: rgb(48, 47, 47);
        }
    </style>
    <script src="{{ asset('js/login.js') }}"></script>
>>>>>>> c4d6caa4806bead91d903f36abea3368c85bd6f9
</body>

</html>
