@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center m-2" >
        <div class="col-md-12 p-3">
            <div class="card  badge-light shadow">
                <div class="card-header">
                    <label for=""><h3>Formulario de Producto</h3></label>

                </div>
                <div class="card-body">
                    {{-- <hr class="border-dark"> --}}
            <form  action="{{ route('producto.form') }}" method="POST" class="form" id="form" enctype="multipart/form-data">
              @csrf

              <div class="form-row ">
                <div class="form-group col-md-6">
                  <label for="nombre" class="form-label">Titulo</label>
                  <input type="text" class="form-control" id="" name="titulo" required>
                </div>
                <div class=" form-group col-md-6">
                  <label for="email" class="form-label">Código</label>
                  <input type="number" class="form-control" id="" placeholder="" name="codigo" >
                </div>
                <div class=" form-group col-md-6">
                  <label for="telefono" class="form-label">Precio</label>
                  <input type="number" class="form-control" id="" placeholder="" name="precio" >
                </div>
                <div class=" form-group col-md-6">
                  <label for="email" class="form-label">Cantidad</label>
                  <input type="number" class="form-control" id="" placeholder="" name="cantidad" >
                </div>
                <div class="form-group col-md-12">
                  <label for="apellido" class="form-label">Descripción</label>
                  <textarea type="text" class="form-control" id="" name="descripcion" required></textarea>
                </div>
                <div class="form-group col-md-12">
                  <label for="direccion" class="form-label">Observaciones</label>
                  <input type="text" class="form-control" id="" name="observaciones" >
                </div>
                
                <div class="form-group col-12">
                  <button type="submit" class="btn btn-primary"> <i class="fa fa-save"></i> Guardar</button>
                </div>
              </div>

              
              </form>
                </div>
            </div>
           
            
           
        </div>
    </div>
</div>
@endsection
