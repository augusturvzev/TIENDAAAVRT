@extends('admin/layoutadmin')

@section('content')

<div class="container">
    
<h2 style="color: #000;">Editar Productos</h2>

<style>
    .form-group {
  margin-bottom: 15px;
}

/* Style the labels */
label {
  display: block;
  margin-bottom: 5px;
  color: #000;
}

/* Style the inputs */
.form-control {
  width: 100%;
  padding: 5px 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  background-color: rgba(251, 247, 247, 0.388);
  color: #000;
}

/* Style the select */
select {
  width: 100%;
  padding: 5px 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  background-color: rgba(251, 247, 247, 0.388);
  color: #000;
}

/* Style the button */
.btn {
  padding: 5px 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  background-color: #007bff;
  color: white;
}
</style>
    <form method="POST" action="{{ route('productos.update', $producto->id) }}">
        @csrf
        @method('PUT') <!-- Utiliza PUT para la actualización -->
        <div class="row">
            <div class="form-group col-md-4">
                <label for="nombre" style="color: #000;">Nombre</label>
                <input type="text" class="form-control" style="background: rgba(251, 247, 247, 0.388); color: #000" id="dni" name="nombre" value="{{ $producto->nombre }}" required>
            </div>
            <div class="form-group col-md-4">
                <label for="nombres" style="color: #000;">Descripción</label>
                <input type="text" class="form-control" style="background: rgba(251, 247, 247, 0.388); color: #000" id="nombres" name="descripcion" value="{{ $producto->descripcion }}" required>
            </div>
            <div class="form-group col-md-4">
                <label for="apellidos" style="color: #000;">Precio</label>
                <input type="text" class="form-control" style="background: rgba(251, 247, 247, 0.388); color: #000" id="apellidos" name="precio" value="{{ $producto->precio }}" required>
            </div>
            <div class="form-group col-md-4">
                <label for="apellidos" style="color: #000;">Inventario</label>
                <input type="text" class="form-control" style="background: rgba(251, 247, 247, 0.388); color: #000" id="apellidos" name="inventario"  value="{{ $producto->inventario }}" required>
            </div>
            <div class="form-group col-md-4">
                <label for="apellidos" style="color: #000;">Categoria</label>
                <select name="id_categoria" class="form-control" id="" style="background: rgba(251, 247, 247, 0.388); color: #000"  value="{{ $producto->id_categoria }}" required>
                    @foreach ($categorias as $ca)
                    <option value="{{$ca->id}}" style="background: rgba(251, 247, 247, 0.388); color: #000; "  id="categoria" name="idCategoria" required>{{$ca->nombre}} </option>
                        @endforeach
                    
                </select>
                {{-- <input type="text" class="form-control" id="apellidos" name="apellidos" value="{{ $productos->idCategoria }}" required> --}}
            </div>
           
        </div>
        <div class="form-group col-md-4">
        <button type="submit" class="btn btn-primary">Guardar cambios</button>
    </form>
</div>





@endsection