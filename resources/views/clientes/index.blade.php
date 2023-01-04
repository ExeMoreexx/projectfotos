@extends('layouts.app')

@section('title', 'Cliente App')

@section('content')

<p class="text-center fs-1 fw-bold mt-5">Admin</p>

<div class="card m-sm-auto" style="width: 70rem">
    <h5 class="card-header">
        <div class="d-flex flex-row-reverse">
            <a id="boton-agg" href="{{ route('clientes.create') }}" class="btn mt-1 mx-2 fw-bold" role="button"><i class="bi bi-plus-circle me-3"></i>Agregar</a>
            <a id="boton-clientes" href="{{ route('clientes.index') }}" class="btn mt-1 mx-2 fw-bold" role="button"><i class="bi bi-people-fill me-3"></i>Clientes</a>
            <a id="boton-fotos" href="" class="btn btn-outline-primary mt-1 mx-2 fw-bold" role="button"><i class="bi bi-images me-3"></i>Fotos</a>
          </div>
    </h5>
    <div class="card-body">
      <h5 class="card-title">Tabla De Todos Los Clientes</h5>
      <table class="table table-striped mt-4 w-100 shadow p-3 mb-5 bg-body rounded">
        <thead class="text-white" style="background-color: #7021f0;">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Direccion</th>
            <th scope="col">Telefono</th>
            <th scope="col">Correo Electronico</th>
            <th scope="col">Creada</th>
            <th scope="col">Editada</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
          </tr>
        </thead>
        <tbody>
            @if(isset($cliente))
            @foreach ($cliente as $row)
          <tr>
            <th scope="row">{{ $row->id }}</th>
            <td>{{ $row->nombres }}</td>
            <td>{{ $row->apellidos }}</td>
            <td>{{ $row->direccion }}</td>
            <td>{{ $row->telefono }}</td>
            <td>{{ $row->correo_electronico }}</td>
            <td>{{ $row->created_at }}</td>
            <td>{{ $row->updated_at }}</td>
            <td><a href="{{ route('clientes.edit', $row->id) }}" class="btn btn-success" role="button" type="submit"><i class="bi bi-pencil-fill"></i></a></td>
            <form action="#" method="POST">
                @csrf
                @method('delete')
                <td><button class="btn btn-danger"><i class="bi bi-trash3"></i></button></td>
            </form>
          </tr>
            @endforeach
            @endif
        </tbody>
      </table>
    </div>
  </div>
    
  @endsection