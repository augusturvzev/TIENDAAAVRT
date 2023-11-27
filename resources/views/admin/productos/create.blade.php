@extends('admin/layoutadmin')

@section('content')

<style>
    /* Tus estilos aquí */

    
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
    <a href="{{ route('admin.productos') }}">Volver a la lista de productos</a>
</div>

@endsection
