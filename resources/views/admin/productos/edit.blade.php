@extends('admin/layoutadmin')

@section('content')

<div class="container">
    <h2 style="color: #ffffff;">Editar Productos</h2>
    <form method="POST" action="{{ route('productos.update', $producto->id) }}">
        @csrf
        @method('PUT') <!-- Utiliza PUT para la actualización -->
        <div class="row">
            <div class="form-group col-md-4">
                <label for="nombre" style="color: #ffffff;">Nombre</label>
                <input type="text" class="form-control" style="background: rgba(251, 247, 247, 0.388); color: #ffffff" id="dni" name="nombre" value="{{ $producto->nombre }}" required>
            </div>
            <div class="form-group col-md-4">
                <label for="nombres" style="color: #ffffff;">Descripción</label>
                <input type="text" class="form-control" style="background: rgba(251, 247, 247, 0.388); color: #ffffff" id="nombres" name="descripcion" value="{{ $producto->descripcion }}" required>
            </div>
            <div class="form-group col-md-4">
                <label for="apellidos" style="color: #ffffff;">Precio</label>
                <input type="text" class="form-control" style="background: rgba(251, 247, 247, 0.388); color: #ffffff" id="apellidos" name="precio" value="{{ $producto->precio }}" required>
            </div>
            <div class="form-group col-md-4">
                <label for="apellidos" style="color: #ffffff;">Inventario</label>
                <input type="text" class="form-control" style="background: rgba(251, 247, 247, 0.388); color: #ffffff" id="apellidos" name="inventario"  value="{{ $producto->inventario }}" required>
            </div>
            <div class="form-group col-md-4">
                <label for="apellidos" style="color: #ffffff;">Categoria</label>
                <select name="id_categoria" class="form-control" id="" style="background: rgba(251, 247, 247, 0.388); color: #ffffff"  value="{{ $producto->id_categoria }}" required>
                    @foreach ($categorias as $ca)
                    <option value="{{$ca->id}}" style="background: rgba(251, 247, 247, 0.388); color: #000; "  id="categoria" name="idCategoria" required>{{$ca->nombre}} </option>
                        @endforeach
                    
                </select>
                {{-- <input type="text" class="form-control" id="apellidos" name="apellidos" value="{{ $productos->idCategoria }}" required> --}}
            </div>
           
        </div>
        <button type="submit" class="btn btn-primary">Guardar cambios</button>
    </form>
</div>





@endsection