@extends('admin/layoutadmin')

@section('content')
<div class="containerpro mx-auto my-5" style="max-width: 600px; background-color: #f8f9fa; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
    <h2 class="text-center mb-4">Añadir Usuario</h2>
    <form method="POST" action="{{ route('usuarios.store') }}">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nombres">Usuario</label>
                    <input type="text" class="form-control" id="nombre" name="usuario" required>
                </div>
                <div class="form-group">
                    <label for="apellido">Correo</label>
                    <input type="text" class="form-control" id="apellidos" name="correo" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="dni">Contraseña</label>
                    <input type="text" class="form-control" id="dni" name="password" required>
                </div>
            </div>
        </div>
        <!-- <div class="text-center">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('admin.usuarios') }}" class="btn btn-danger">Cancelar</a>
        </div> -->
        <div class="text-center">
            <button type="submit" class="btn btn-success mr-4">Guardar cambios</button>
            <a href="{{ route('admin.usuarios') }}" class="btn btn-secondary">Cancelar</a>
        </div>



    </form>
</div>

@endsection