@extends('layouts.app')

@section('title', 'Editar')

@section('navbar')

<nav class="navbar navbar-dark navbar-expand-lg bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><i class="bi bi-pencil-square me-3"></i>Editar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-circle me-2"></i>
                  Usuario
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Cerrar Sesion <i class="bi bi-box-arrow-right me-2"></i></a></li>
                </ul>
              </li>
        </ul>
      </div>
    </div>
  </nav>

@endsection

@section('buttons')

<div class="d-flex flex-row-reverse">
  <a href="{{ route('fotos.create') }}" class="btn btn-primary mt-3" role="button"><i class="bi bi-plus-circle me-2"></i>Agregar</a>
  <a href="{{ route('clientes.index') }}" class="btn btn-outline-primary mt-3 mx-2" role="button"><i class="bi bi-people-fill me-2"></i>Clientes</a>
  <a href="{{ route('fotos.index') }}" class="btn btn-outline-primary mt-3 mx-2" role="button"><i class="bi bi-images me-2"></i>Fotos</a>
</div>

@endsection

@section('form')

<div class="card mt-5 shadow-lg p-3 mb-5 bg-body rounded">
    <div class="card-body">
        <h4 class="modal-title mb-3">Editar Foto {{ $foto->id }}</h4>
        <form action="{{ url('/fotos/'.$foto->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        {{ method_field('PATCH') }}
            <div class="mb-3">
              
            </div>
        <div class="input-group mb-3">
          <input type="hidden" name="fotoborrar" value="{{$foto->image}}">
            <input type="file" class="form-control" id="inputGroupFile02" name="image">
            <label class="input-group-text" for="inputGroupFile02">Upload</label>
          </div>
            <input type="submit" class="btn btn-primary" role="button" value="Guardar">
            <a href="{{ route('fotos.index') }}" class="btn btn-danger" role="button"><i class="bi bi-x-circle me-2"></i>Cancelar</a>
          </form>
    </div>
  </div>

@endsection