@extends('layouts.app')

@section('title', 'Create')

@section('content')

<div class="card mt-4 shadow-lg p-3 mb-5 bg-body rounded position-relativ position-absolute top-50 start-50 translate-middle" style="width: 28rem; border: none">
    <div class="card-body">
        <p class="text-center fs-1 fw-bold">Agregar Cliente</p>
        <form action="{{ route('clientes.store') }}" method="POST">
            @csrf
          <div class="input-group mb-3">
            <div class="form-floating">
              <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombres">
              <label for="floatingInputGroup1">Nombres</label>
            </div>
          </div>
          <div class="input-group mb-3">
            <div class="form-floating">
              <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos">
              <label for="floatingInputGroup1">Apellidos</label>
            </div>
          </div>
          <div class="input-group mb-3">
            <div class="form-floating">
              <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion">
              <label for="floatingInputGroup1">Direccion</label>
            </div>
          </div>
          <div class="input-group mb-3">
            <div class="form-floating">
              <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Telefono">
              <label for="floatingInputGroup1">Telefono</label>
            </div>
          </div>
          <div class="input-group mb-3">
            <div class="form-floating">
              <input type="email" class="form-control" id="correo_electronico" name="correo_electronico" placeholder="Correo Electronico">
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