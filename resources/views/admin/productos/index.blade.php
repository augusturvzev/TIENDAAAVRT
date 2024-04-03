@extends('admin/layoutadmin')

@section('content')
<style>
.center-content {
  margin: 0 auto;
  width: 80%;
}
.center {
  text-align: center;
}
.table-container {
    overflow-x: auto;
}
</style>

<!-- CONTENIDOO --> 

<div class="center-content">
<h2>Productos</h2>
    <div class="table-responsive">
    <div class="table-responsive">
    <table class="table table-striped table-bordered color-del-texto" style="table-layout: fixed;">
    <thead class="thead-dark">
    <div class="table-responsive">
        <tr>
            <th style="width: 50px;">ID</th>
            <th style="width: 250px;">Nombre</th>
            <th style="width: 300px;">Descripción</th>
            <th style="width: 150px;">Precio</th>
            <th style="width: 100px;">Inventario</th>
            <th style="width: 200px;">Categoría</th>
            <th style="width: 100px;">Acciones</th>
        </tr>
    </thead>
    <tbody class="color-del-texto">
        @foreach ($productos as $producto)
        <tr>
            <td>{{$producto->id}} </td>
            <td>{{$producto->nombre}}</td>
            <td>{{$producto->descripcion}}</td>
            <td>s/{{$producto->precio}}</td>
            <td>{{$producto->inventario}}</td>
            <td>{{$producto->categoria->nombre}}</td>
            <td>
                <a href="{{ route('productos.show', $producto->id) }}" class="btn btn-info btn-sm mr-1">Ver</a>
                <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-warning btn-sm mr-1">Editar</a>
                <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
        <!-- Paginación -->
        <div>
            {{ $productos->links() }}
        </div>
    </div>

    <!-- Botones -->
    <!-- <div class="botones d-flex justify-content-space-between mt-3">
    <a href="{{route('productos.create')}}" class="btn btn-success mr-6">Agregar Productos</a>
    <a href="{{route('admin.principal')}}" class="btn btn-secondary">Atrás</a>
  </div> -->

  <div class="center">
        <a href="{{route('productos.create')}}" class="btn btn-success mr-6">Agregar Producto</a>

        <a href="{{route('admin.principal')}}"class="btn btn-secondary">Volver</a>

        
    </div>
</div>
@endsection