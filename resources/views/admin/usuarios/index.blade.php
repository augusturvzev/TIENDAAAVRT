
@extends('admin/layoutadmin')

@section('content')
<style>

    
</style>
<div class="center-content">
  <h2>Usuarios</h2>
  <div class="table-responsive">
    <table class="table table-striped table-bordered color-del-texto" style="table-layout: fixed;">
      <thead class="thead-dark">
        <tr>
          <th style="width: 50px;">ID</th>
          <th style="width: 150px;">Usuario</th>
          <th style="width: 200px;">Correo</th>
          <th style="width: 150px;">Contraseña</th>
          <th style="width: 100px;">Acciones</th>
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
          </tr>
        @endforeach
      </tbody>
    </table>
    <div>
      {{ $usuarios->links() }}
    </div>
  </div>
  <div class="botones d-flex justify-content-between">
    <!-- <a href="{{route('usuarios.create')}}" style="background: green; color:#fff; border-radius:5px">Agregar usuario</a>
    <a href="{{route('admin.principal')}}">Volver</a> -->

    <div class="center">
        <a href="{{route('usuarios.create')}}"  class="btn btn-success mr-6" style="background: green; color:#fff; border-radius:5px">Agregar Usuario</a>

        <a href="{{route('admin.principal')}}" class="btn btn-secondary">Volver</a>

        

  </div>
</div>
@endsection