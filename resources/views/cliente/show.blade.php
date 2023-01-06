@extends('layouts.app')

@section('title', 'Cliente App')
    
@section('content')
<div id="element" class="container-fluid">
        <div class="row">

      <div class="col-md-8">
@foreach ($foto as $fotos)
<form action="{{ route('cart.add', $fotos->id) }}">
                <span class="ms-3">
                        <img src="/storage/{{$fotos->image}}" alt="" width="200">
                </span>
        <button class="btn btn-primary" type="submit">Agregar</button>
</form>
@endforeach
</div>
<div class="col-md-4">s</div>
</div>  
</div>
@endsection

