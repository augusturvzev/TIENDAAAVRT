@extends('admin/layoutadmin')

@section('content')
<style>
    .containerpro{
        color: #000 !important;
        margin-top: 150px; /* Ajusta el valor según sea necesario */
        /* margin-left: 20px;
        margin-right: 20px; */
    
    }
</style>

<div class="containerpro mx-auto my-5" style="max-width: 600px; background-color: #f8f9fa; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
    <h2 class="text-center mb-4">Añadir Categoria</h2>
    <form method="POST" action="{{ route('categoria.store') }}">
        @csrf
        <div class="row mx-auto">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="desc">Descripción</label>
                    <input type="text" class="form-control" id="desc" name="descripcion" required>
                </div>
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-success mr-4">Guardar cambios</button>
            <a href="{{ route('admin.categoria') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form> 
</div>


@endsection