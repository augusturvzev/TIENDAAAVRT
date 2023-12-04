
@extends('admin/layoutadmin')

@section('content')
<style>

.container {
  margin-top: 75px;
  width: 80%;
  margin: 0 auto;
}

/* Style the form */
form {
  margin-bottom: 50px;
}

/* Style the buttons */
.btn {
  padding: 5px 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

.btn-primary {
  background-color: #007bff;
  color: white;
}

/* Move the "Guardar cambios" button down */
.btn-primary {
  margin-bottom: 10px;
}
</style>
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
        <div class="form-group col-md-4">
         <button type="submit" class="btn btn-primary">Guardar cambios</button>

         

    </form>
    <div class="form-group col-md-4">
  

        <!-- botonvverde

        <a href="{{route('productos.create')}}" class="btn btn-success mr-6">Agregar Productos</a> -->

</div>
@endsection