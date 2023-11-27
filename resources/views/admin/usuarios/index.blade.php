
@extends('admin/layoutadmin')

@section('content')
<div class="center-content">
    <h2>Usuarios</h2>
    <div class="table-responsive">
        <table class="table table-striped table-bordered color-del-texto">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Correo</th>
                    <th>Contraseña</th>
                  
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody class="color-del-texto">
                @foreach($usuarios as $us)
                <tr>
                    <td>{{$us->id}}</td>
                    <td>{{$us->usuario}}</td>
                    <td>{{$us->correo}}</td>
                    <td>{{$us->password}}</td>
                   
                  
                    <td>
                        <form action="" method="GET" style="display: inline;">
                            @csrf
                            <button type="submit" class="btn btn-primary">Ver</button>
                        </form>
                        <a href="{{ route('usuarios.edit', $us->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('usuarios.destroy', $us->id) }}" method="POST" style="display: inline;">
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
        <a href="{{route('usuarios.create')}}" style="background: green; color:#fff; border-radius:5px" >Agregar usuario</a>
        <a href="{{route('admin.principal')}}">Volver</a>
    </div>
    <br>
</div>
</div>
@endsection     