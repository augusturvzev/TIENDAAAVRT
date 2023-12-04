@extends('admin/layoutadmin')

@section('content')
<style>
    .bienvenido {
        text-align: center;
        margin-top: 45vh;
        font-size: 50px;
<<<<<<< HEAD
        color: #000;
=======
        color: #fff;
>>>>>>> c4d6caa4806bead91d903f36abea3368c85bd6f9
        animation: appear 5s steps(9) both;
    }
</style>

<div class="bienvenido">Bienvenido Administrador {{ session('usuario_autenticado')['usuario'] }}</div>
@endsection