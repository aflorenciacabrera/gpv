@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center  m-2" >
        <div class="col-md-12 p-3">
            <div class="card badge-light shadow">
                <div class="card-header">
                    <label for=""><h3>Formulario de Ciente</h3></label>
                </div>
                <div class="card-body">
                  {{-- <hr class="border-dark"> --}}
                  <form  action="{{ route('cliente.form') }}" method="POST" class="form" id="form" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row ">
                      <div class="form-group col-md-6">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="" name="nombre" required>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="apellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="" name="apellido" required>
                      </div>
                      <div class=" form-group col-md-6">
                        <label for="telefono" class="form-label">Teléfono</label>
                        <input type="number" class="form-control" id="" placeholder="" name="telefono" >
                      </div>
                      <div class=" form-group col-md-6">
                        <label for="email" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" id="" placeholder="" name="email" >
                      </div>
                      <div class="form-group col-md-12">
                        <label for="direccion" class="form-label">Dirección</label>
                        <input type="text" class="form-control" id="" name="direccion" >
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
