@extends('layouts.appAdmin')

@section('title', 'Home')

@section('content')

<p class="text-center fs-1 fw-bold mt-5">Admin</p>

    <h5 class="card-header">
        <div class="text-center flex-row-reverse">
            <a id="boton-clientes" href="{{ route('clientes.index') }}" class="btn mt-1 mx-2 fw-bold" role="button"><i class="bi bi-people-fill me-3"></i>Clientes</a>
            <a id="boton-fotos" href="#" class="btn btn-outline-primary mt-1 mx-2 fw-bold" role="button"><i class="bi bi-images me-3"></i>Fotos</a>
          </div>
    </h5>
    
  @endsection