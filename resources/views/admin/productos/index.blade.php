@extends('admin/layoutadmin')

@section('content')
<<<<<<< HEAD
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
=======

<style>
    /* Estilos para centrar el contenido */
    .center-content {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        height: 100vh;
        margin: 15px;
    }

    .table-responsive {
        margin-bottom: 20px;
    }

    .table {
        text-align: center;
    }

    a {
        display: block;
        margin: 10px;
        text-decoration: none;
        color: #007BFF;
    }

    h2 {
        color: #fff;
    }

    td {
        color: #fff;
    }
 
</style>

<div class="center-content">
    <h2>Productos</h2>
    <div class="table-responsive">
        <table class="table table-striped table-bordered color-del-texto">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Inventario</th>
                    <th>Categoria</th>
                   
                    <th>Acciones</th>
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
                        
                        <a href="#" class="btn btn-info btn-sm">Ver</a>
                        <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>@endforeach
            </tbody>
        </table>
    </div>
    <div class="botones d-flex justify-content-between">
        <a href="{{route('productos.create')}}" style="background: green; color:#fff; border-radius:5px" >Agregar Productos</a>
        <a href="{{route('admin.principal')}}">Atrás</a>
    </div>
    <br>
</div>
</div>

>>>>>>> c4d6caa4806bead91d903f36abea3368c85bd6f9
@endsection