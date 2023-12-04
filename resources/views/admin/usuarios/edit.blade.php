@extends('admin/layoutadmin')

@section('content')


<div class="container">
    <h2 style="color: white;">Editar Usuarios</h2>
    <form method="POST" action="{{ route('usuarios.update', $usuarios->id) }}">
        @csrf
        @method('PUT') <!-- Utiliza PUT para la actualización -->
        <div class="row">
            <div class="form-group col-md-4">
                <label for="nombres" style="color: black;">Usuario</label>
                <input type="text" style="background: rgba(251, 247, 247, 0.388); color: #000" class="form-control" id="nombres" name="usuario" value="{{ $usuarios->usuario }}" required>
            </div>
            <div class="form-group col-md-4">
                <label for="apellidos" style="color: black;">Correo</label>
                <input type="text" style="background: rgba(251, 247, 247, 0.388); color: #000" class="form-control" id="apellidos" name="correo" value="{{ $usuarios->correo }}" required>
            </div>
            <div class="form-group col-md-4">
                <label for="dni" style="color: black;">Contraseña</label>
                <input type="text" style="background: rgba(251, 247, 247, 0.388); color: #000" class="form-control" id="dni" name="password" value="{{ $usuarios->password }}" required>
            </div>
         
          
        </div>
        <button type="submit" class="btn btn-primary">Guardar cambios</button>
    </form>
</div>

@endsection