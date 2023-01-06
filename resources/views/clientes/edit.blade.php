@extends('layouts.app')

@section('title', 'Edit')

@section('content')

<div class="card shadow-lg p-3 mb-5 bg-body rounded position-relativ position-absolute top-50 start-50 translate-middle" style="width: 28rem; border: none">
    <div class="card-body">
        <p class="text-center fs-1 fw-bold">Editar Cliente {{ $cliente->id }}</p>
        <form action="{{ route('clientes.edit', $cliente->id) }}" method="POST">
            @csrf
            {{ method_field('PATCH') }}
          <div class="input-group mb-3">
            <div class="form-floating">
              <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombres" value="{{ $cliente->nombres }}">
              <label for="floatingInputGroup1">Nombres</label>
            </div>
          </div>
          <div class="input-group mb-3">
            <div class="form-floating">
              <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos" value="{{ $cliente->apellidos }}">
              <label for="floatingInputGroup1">Apellidos</label>
            </div>
          </div>
          <div class="input-group mb-3">
            <div class="form-floating">
              <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion" value="{{ $cliente->direccion }}">
              <label for="floatingInputGroup1">Direccion</label>
            </div>
          </div>
          <div class="input-group mb-3">
            <div class="form-floating">
              <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Telefono" value="{{ $cliente->telefono }}">
              <label for="floatingInputGroup1">Telefono</label>
            </div>
          </div>
          <div class="input-group mb-3">
            <div class="form-floating">
              <input type="email" class="form-control" id="correo_electronico" name="correo_electronico" placeholder="Correo Electronico" value="{{ $cliente->correo_electronico }}">
              <label for="floatingInputGroup1">Correo Electronico</label>
            </div>
          </div>
          <div class="d-grid gap-2">
            <button class="btn fw-bold my-2 p-2" type="submit" style="background-color: #843cf8; color: #fff">Save</button>
            <a href="{{ route('clientes.index') }}" class="btn btn-danger fw-bold my-2 p-2" style="color: #fff">Cancel</a>
          </div>
        </form>
    </div>
  </div>
    
@endsection