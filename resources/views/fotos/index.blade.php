@extends('layouts.app')

@section('title', 'Fotos')


@section('content')

<p class="text-center fs-1 fw-bold mt-5">Fotos</p>

<div id="element">
<div class="card m-sm-auto" style="width: 70rem">
  <h5 class="card-header">
    <div class="d-flex flex-row-reverse">
        <a id="boton-agg" href="{{ route('fotos.create_infantil') }}" class="btn mt-1 mx-2 fw-bold" role="button"><i class="bi bi-plus-circle me-3"></i>Agregar</a>
      </div>
</h5>
<div class="card-body">
  <h5 class="card-title">Tabla De Todas Las Fotos</h5>
<table class="table table-striped mt-4 w-100 shadow p-3 mb-5 bg-body rounded">
    <thead class="text-white" style="background-color: #7021f0;">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Cliente</th>
        <th scope="col">Precio</th>
        <th scope="col">Ver</th>
        <th scope="col">Editar</th>
        <th scope="col">Eliminar</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($foto as $fotos)
      <tr>
        <th scope="row">{{ $fotos->fotoid }}</th>
        <td>{{ $fotos->nombres }} {{ $fotos->apellidos }}</td>
        <td>{{ $fotos->precio }}</td>
        <td><a href="{{route('fotos.show',$fotos->clienteid)}}" class="btn btn-secondary" role="button"><i class="bi bi-eye-fill"></i></a></td>
        <td><a href="{{ route('fotos.edit', $fotos->fotoid) }}" class="btn btn-success" role="button" type="submit"><i class="bi bi-pencil-fill"></i></a></td>
        <form action="{{ route('fotos.destroy', $fotos->fotoid) }}" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <td><button class="btn btn-danger"><i class="bi bi-trash3"></i></button></td>
        </form>
      </tr>
        @endforeach
    </tbody>
  </table>
</div>
</div>
</div>



@endsection
