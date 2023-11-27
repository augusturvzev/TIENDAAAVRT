@extends('admin/layoutadmin')

@section('content')
<style>
    .containerpro{
        color: #ffffff !important;
        margin-top: 150px; /* Ajusta el valor según sea necesario */
        margin-left: 20px;
        margin-right: 20px;
    
    }
  
</style>
<div class="containerpro mx-auto">
    <h2 class="text-center">Añadir Categoria</h2>
    <form method="POST" action="{{ route('categoria.store') }}">
        @csrf
        <div class="row mx-auto">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                   
                    <input type="text" class="form-control" style="background: rgba(251, 247, 247, 0.388); color: #ffffff; " id="nombre" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="desc">Descripción</label>
                    <input type="text" class="form-control" style="background: rgba(251, 247, 247, 0.388); color: #ffffff; "  id="desc" name="descripcion" required>
                </div>
                
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Guardar</button>
          <a href="{{ route('admin.categoria') }}" class="btn btn-danger">Cancelar</a>
        </div>
    </form> 
     
</div>

@endsection