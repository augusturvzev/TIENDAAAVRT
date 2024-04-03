@extends('admin/layoutadmin')

@section('content')
<style>
    .bienvenido {
        text-align: center;
        margin-top: 45vh;
        font-size: 50px;
        color: #000;
        animation: appear 5s steps(9) both;
    }
</style>

<div class="bienvenido">Bienvenido Administrador {{ session('usuario_autenticado')['usuario'] }}</div>
@endsection