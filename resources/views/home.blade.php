@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header text-center">{{ __('MENU') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- {{ __('You are logged in!') }} --}}

                    @if(Auth::user()->hasRole('admin'))
                   
                    <div class="card-deck">
                       
                            <div class="card shadow">
                                <a href="{{route('productos')}}" target="_blank"  type="button" class="btn btn-outline-primary">
                            {{-- <img src="..." class="card-img-top" alt="..."> --}}
                                    <div class="card-body text-center">
                                        <h5 class="card-title">PRODUCTOS</h5>
                                        <p class="card-text">
                                        </p>
                                    </div>   
                                </a>                  
                            </div>
                      
                        <div class="card shadow">
                            <a href="{{route('clientes')}}" target="_blank"  type="button" class="btn btn-outline-danger">
                          {{-- <img src="..." class="card-img-top" alt="..."> --}}
                          <div class="card-body text-center">
                            <h5 class="card-title">CLIENTES</h5>
                            <p class="card-text">
                            </p>
                          </div>     
                        </a>                          
                        </div>                      
                    </div>
                      <br>
                      <div class="card-deck">
                        <div class="card shadow">
                            <a href="{{route('pedidos')}}" target="_blank"  type="button" class="btn btn-outline-success">
                          {{-- <img src="..." class="card-img-top" alt="..."> --}}
                          <div class="card-body text-center">
                            <h5 class="card-title">PEDIDOS</h5>
                            <p class="card-text">

                            </p>
                          </div>
                        </a>       
                        </div>
                        <div class="card shadow">
                            <a href="{{route('admin')}}" target="_blank"  type="button" class="btn btn-outline-dark">
                          {{-- <img src="..." class="card-img-top" alt="..."> --}}
                          <div class="card-body text-center">
                            <h5 class="card-title">ADMINISTRACIÓN</h5>
                            <p class="card-text">

                            </p>
                          </div>  
                        </a>                             
                        </div>                      
                    </div>
                    @else
                        <div>Acceso usuario</div>
                    @endif
                      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
