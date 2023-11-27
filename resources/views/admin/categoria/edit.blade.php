
@extends('admin/layoutadmin')

@section('content')

<div class="container">
    <h2>Editar Categoria</h2>
    <form method="POST" action="{{ route('categoria.update', $categoria->id) }}">
        @csrf
        @method('PUT') <!-- Utiliza PUT para la actualización -->
        <div class="form-group col-md-4">
            <label for="nombres">Nombre</label>
            <input type="text" class="form-control" id="dni" name="nombre" value="{{ $categoria->nombre }}" required>
        </div>
        <div class="form-group col-md-4" >
            <label for="nombres">Descripción</label>
            <input type="text" class="form-control" id="nombres" name="descripcion" value="{{ $categoria->descripcion }}" required>
        </div>
       
        <button type="submit" class="btn btn-primary">Guardar cambios</button>
    </form>
</div>
@endsection