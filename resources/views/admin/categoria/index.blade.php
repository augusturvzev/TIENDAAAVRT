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
</style>

<div class="center-content" style="margin-top: 75px;">
    <!-- <h2>Categoria de Productos</h2> -->
    <h2>Categoria de Productoss</h2>
    <div class="table-responsive">
    <div class="table-responsive">
    <table class="table table-striped table-bordered color-del-texto" style="table-layout: fixed;">
    <thead class="thead-dark">
    <div class="table-responsive">
        <table class="table table-striped table-bordered color-del-texto" style="table-layout: fixed;">
            <thead class="thead-dark">
                <tr>
                    <th style="width: 50px;">ID</th>
                    <th style="width: 250px;">Nombre</th>
                    <th style="width: 300px;">Descripción</th>
                    <th style="width: 150px;">Acciones</th>
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
>>>>>>> c4d6caa4806bead91d903f36abea3368c85bd6f9
                </tr>
            </thead>
            <tbody class="color-del-texto">
                @foreach ($categoria as $cat)
<<<<<<< HEAD
                <tr>
                    <td>{{$cat->id}}</td>
                    <td>{{$cat->nombre}}</td>
=======
                    
                
                <tr>
                    <td>{{$cat->id}}</td>
                    <td>{{$cat->nombre}} </td>
>>>>>>> c4d6caa4806bead91d903f36abea3368c85bd6f9
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
<<<<<<< HEAD
                </tr>
                @endforeach
            </tbody>
        </table>
        <div>
            {{ $categoria->links() }}
        </div>
    </div>
</div>
    <div class="center">
        <a href="{{route('categoria.create')}}" class="btn btn-success mr-6">Agregar Categoria</a>

        <a href="{{route('admin.principal')}}" class="btn btn-secondary">Volver</a>

        
=======
                </tr>@endforeach
            </tbody>
        </table>
    </div>
    <div class="botones d-flex justify-content-between">
        <a href="{{route('categoria.create')}}" style="background: green; color:#fff; border-radius:5px" >Agregar Categoria</a>
        <a href="{{route('admin.principal')}}">Volver</a>
>>>>>>> c4d6caa4806bead91d903f36abea3368c85bd6f9
    </div>
    <br>
</div>
</div>

@endsection