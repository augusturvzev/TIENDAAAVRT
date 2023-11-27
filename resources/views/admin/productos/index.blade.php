@extends('admin/layoutadmin')

@section('content')

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

@endsection