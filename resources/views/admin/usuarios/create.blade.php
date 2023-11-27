@extends('admin/layoutadmin')

@section('content')

<div class="containerpro mx-auto " style="margin-bottom: 150px;">
    <h2 class="text-center">Añadir Usuario</h2>
    <form method="POST" action="{{ route('usuarios.store') }}">
        @csrf
        <div class="row ">
            <div class="col-md-6">

                <div class="form-group">
                    <label for="nombres">Usuario</label>
                    <input type="text" class="form-control"
                        style="background: rgba(251, 247, 247, 0.388); color: #ffffff; " id="nombre" name="usuario"
                        required>
                </div>
                <div class="form-group">
                    <label for="apellido">Correo</label>
                    <input type="text" class="form-control"
                        style="background: rgba(251, 247, 247, 0.388); color: #ffffff; " id="apellidos" name="correo"
                        required>
                </div>

            </div>
            <div class="col-md-6">

                <div class="form-group">
                    <label for="dni">Contraseña</label>
                    <input type="text" class="form-control"
                        style="background: rgba(251, 247, 247, 0.388); color: #ffffff; " id="dni" name="password"
                        required>
                </div>
                

            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('admin.usuarios') }}" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
</div>

@endsection