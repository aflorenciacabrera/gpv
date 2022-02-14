@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center  m-2" >
        <div class="col-md-12 p-3">
            <div class="card badge-light border-dark shadow ">
                <div class="card-header">
                    <div class="row ">
                        <div class="col-8">
                            <label for=""><h3>Listado de productos</h3></label>
                        </div>
                        <div class="col-4 text-right">
                            <a type="button" href="{{route('producto.form')}}" class="btn btn-outline-dark"><i class="fa fa-plus-square"></i> Nuevo</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <hr class="border-dark">
                    <div class="table-responsive">
                        <table class="table ">
                            <thead class="table-dark">
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Código</th>
                                <th scope="col">Título</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Observaciones </th>
                                <th scope="col">Acciones </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($productos as $producto)
                                    <tr>
                                        <th scope="row">{{$loop->index+1}}</th>
                                        <td >{{$producto->codigo}} </td>
                                        <td >{{$producto->titulo}} </td>
                                        <td >{{$producto->descripcion}} </td>
                                        <td>{{$producto->precio}}</td>
                                        <td>{{$producto->cantidad}}</td>
                                        <td>{{$producto->observaciones}}</td>
                                        <td>
                                            
                                            <a type="button" href="{{route('producto.form')}}" class="btn btn-light"><i class="fa fa-edit"></i> </a>

                                            <a type="button" href="{{route('producto.form')}}" class="btn btn-light"> <i class="fa fa-trash-o"></i> </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>       
    </div>
</div>

@endsection
