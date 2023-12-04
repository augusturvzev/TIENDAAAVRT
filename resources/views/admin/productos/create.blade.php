@extends('admin/layoutadmin')

@section('content')

<style>
/* Style the form */
/* Style the form */
.form-group {
  margin-bottom: 15px;
}

/* Style the labels */
label {
  display: block;
  margin-bottom: 5px;
}

/* Style the inputs and textareas */
.form-control {
  width: 100%;
  padding: 5px 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

/* Style the buttons */
.btn {
  padding: 5px 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

.btn-success {
  background-color: #28a745;
  color: white;
}

/* Separation between buttons */
.botones {
  display: flex;
  justify-content: space-between;
  margin-bottom: 10px;
}

/* Separation between specific buttons */
.botones .btn:nth-child(2) {
  margin-left: 20px;
}

/* Style the "Volver a la lista de productos" button */
.volver-a-la-lista-de-productos {
  background-color: #6c757d;
  color: white;
}
</style>

<div class="center-content">
    <h2>Agregar Producto</h2>
    
    <form action="{{ route('productos.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="precio">Precio:</label>
            <input type="number" name="precio" class="form-control" step="0.01" required>
        </div>

        <div class="form-group">
            <label for="inventario">Inventario:</label>
            <input type="number" name="inventario" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="id_categoria">Categoría:</label>
            <select name="id_categoria" class="form-control" required>
                {{-- Aquí deberías iterar sobre tus categorías --}}
                @foreach ($productos as $producto)
                    <option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Agregar Producto</button>
    </form>

    <br>
    <a href="{{ route('admin.productos') }}" class="btn btn-secondary">Volver a la lista de productos</a>
</div>


@endsection
