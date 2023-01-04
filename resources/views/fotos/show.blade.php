@extends('layouts.app')

@section('title', 'Fotos')


@section('content')



        @foreach ($foto as $fotos)
        <span class="ms-3"><img src="/storage/{{$fotos->image}}" alt="" width="200"></span>
        @endforeach

@endsection
