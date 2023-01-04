@extends('layouts.app')

@section('title', 'Cliente App')
    
@section('content')

<div class="card shadow-lg p-3 mb-5 bg-body rounded position-relativ position-absolute top-50 start-50 translate-middle" style="width: 28rem; border: none">
    <div class="card-body">
        <p class="text-center fs-1 fw-bold">Ingrese Su Correo</p>
        <form action="{{ route('cliente.store') }}" method="POST">
            @csrf
            <div class="input-group mb-3">
                <div class="form-floating">
                  <input type="email" class="form-control" id="correo" name="correo" placeholder="Email">
                  <label for="floatingInputGroup1">Email</label>
                </div>
                <span class="input-group-text">@example.com</span>
              </div>
              @error('message')
                <div class="alert alert-danger" role="alert">
                {{$message}}
                </div>
              @enderror
          <div class="d-grid gap-2">
            <button class="btn fw-bold my-2 p-2" type="submit" style="background-color: #843cf8; color: #fff">Send</button>
          </div>
        </form>
    </div>
  </div>
    
@endsection