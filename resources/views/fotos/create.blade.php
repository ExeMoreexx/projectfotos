@extends('layouts.app')

@section('title', 'Agregar')
@section('content')
<div class="d-flex flex-row-reverse">
  <a href="{{ route('clientes.index') }}" class="btn btn-outline-primary mt-3 mx-2" role="button"><i class="bi bi-people-fill me-2"></i>Clientes</a>
  <a href="{{ route('fotos.index') }}" class="btn btn-outline-primary mt-3 mx-2" role="button"><i class="bi bi-images me-2"></i>Fotos</a>
</div>




<div class="card mt-5 shadow-lg p-3 mb-5 bg-body rounded">
    <div class="card-body">
        <h4 class="modal-title mb-3">Agregar Foto</h4>
        <form action="{{ route('fotos.store') }}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="mb-3">
              <label for="exampleInputNombres" class="form-label">Cliente</label>
              <select class="form-select w-100" aria-label="Default select example" name="client_id">
                @foreach($clientes as $cliente)
                    <option value="{{$cliente->id}}">{{$cliente->nombres}} {{$cliente->apellidos}}</option>
                @endforeach
                <option selected>Seleccione el Cliente</option>
              </select>
            </div>
        <div class="input-group mb-3">
            <input type="file" class="form-control" id="inputGroupFile02" name="image[]" multiple>
            <label class="input-group-text" for="inputGroupFile02">Upload</label>
          </div>
            <button type="submit" class="btn btn-primary"><i class="bi bi-cloud-download me-2"></i>Guardar</button>
            <a href="{{ route('fotos.index') }}" class="btn btn-danger" role="button"><i class="bi bi-x-circle me-2"></i>Cancelar</a>
          </form>
    </div>
  </div>

@endsection