<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/loginadmin.css') }}">
    <title>Login-Admin</title>
   
</head>

<body>
 
    <div class="header">
        <img src="{{ asset('img/senati.png') }}" alt="">
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
</body>

</html>
