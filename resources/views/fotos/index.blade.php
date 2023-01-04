@extends('layouts.app')

@section('title', 'Fotos')


@section('content')
<div class="d-flex flex-row-reverse">
  <a href="{{ route('fotos.create') }}" class="btn btn-primary mt-3" role="button"><i class="bi bi-plus-circle me-2"></i>Agregar</a>
  <a href="{{ route('clientes.index') }}" class="btn btn-outline-primary mt-3 mx-2" role="button"><i class="bi bi-people-fill me-2"></i>Clientes</a>
  <a href="{{ route('fotos.index') }}" class="btn btn-outline-primary mt-3 mx-2" role="button"><i class="bi bi-images me-2"></i>Fotos</a>
</div>



<table class="table table-striped mt-4 w-75 mx-5 shadow p-3 mb-5 bg-body rounded">
    <thead class="bg-primary text-white">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Cliente</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($foto as $fotos)
      <tr>
        <th>{{ $fotos->fotoid }}</th>
        <th>{{ $fotos->nombres }} {{ $fotos->apellidos }}</th>
        
        <td class="d-flex"><a href="{{route('fotos.show',$fotos->clienteid)}}" class="btn btn-secondary me-2" role="button">Ver</a>
        <a href="{{ url('/fotos/'.$fotos->fotoid.'/edit') }}" class="btn btn-success me-2" role="button" type="submit">Editar</a>
        <form action="{{ url('/fotos/'.$fotos->fotoid) }}" method="post">
            @csrf
            {{ method_field('DELETE') }}
            <input class="btn btn-danger" type="submit" role="button" value="Borrar"></td>
        </form>
      </tr>
        @endforeach
    </tbody>
  </table>


@endsection