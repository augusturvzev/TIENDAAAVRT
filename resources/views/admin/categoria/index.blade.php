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

<div class="center-content" style="margin-top: 75px;">
    <h2>Categoria de Productos</h2>
    <div class="table-responsive">
        <table class="table table-striped table-bordered color-del-texto">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody class="color-del-texto">
                @foreach ($categoria as $cat)
                    
                
                <tr>
                    <td>{{$cat->id}}</td>
                    <td>{{$cat->nombre}} </td>
                    <td>{{$cat->descripcion}}</td>
                    <td>
                        <form action="" method="GET" style="display: inline;">
                            @csrf
                            <button type="submit" class="btn btn-primary">Ver</button>
                        </form>
                        <a href="{{ route('categoria.edit', $cat->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('categoria.destroy', $cat->id) }}" method="POST" style="display: inline;">
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
        <a href="{{route('categoria.create')}}" style="background: green; color:#fff; border-radius:5px" >Agregar Categoria</a>
        <a href="{{route('admin.principal')}}">Volver</a>
    </div>
    <br>
</div>
</div>

@endsection