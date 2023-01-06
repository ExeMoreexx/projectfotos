@extends('layouts.app')

@section('title', 'Editar')

@section('content')

<div class="position-relative">
<div class="card mt-5 shadow-lg p-3 mb-5 bg-body rounded position-absolute top-0 start-50 translate-middle-x" style="width: 28rem">
    <div class="card-body">
        <h4 class="modal-title mb-3">Editar Foto {{ $foto->id }}</h4>
        <form action="{{ route('fotos.update', $foto->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
            <div class="mb-3">
              
            </div>
        <div class="input-group mb-3">
          <input type="hidden" name="fotoborrar" value="{{$foto->image}}">
            <input type="file" class="form-control" id="inputGroupFile02" name="image">
            <label class="input-group-text" for="inputGroupFile02">Upload</label>
          </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('fotos.index') }}" class="btn btn-danger" role="button"><i class="bi bi-x-circle me-2"></i>Cancelar</a>
          </form>
    </div>
  </div>
</div> 

@endsection