@extends('layouts.app')

@section('title', 'Login')

@section('content')

<div class="card shadow-lg p-3 mb-5 bg-body rounded position-relativ position-absolute top-50 start-50 translate-middle" style="width: 28rem; border: none">
    <div class="card-body">
        <p class="text-center fs-1 fw-bold">Login</p>
        <form action="" method="POST">
            @csrf
          <div class="input-group mb-3">
            <div class="form-floating">
              <input type="email" class="form-control" id="email" name="email" placeholder="Email">
              <label for="floatingInputGroup1">Email</label>
            </div>
          </div>
          <div class="input-group mb-3">
            <div class="form-floating">
              <input type="password" class="form-control" id="password" name="password" placeholder="Password">
              <label for="floatingInputGroup1">Password</label>
            </div>
          </div>
          @error('message')
          <div class="alert alert-danger" role="alert">
            {{$message}}
          </div>
          @enderror
          <div class="d-grid gap-2">
            <button class="btn fw-bold my-2 p-2" type="submit" style="background-color: #843cf8; color: #fff">Send</button>
          </div>
          <div class="d-grid gap-2">
            <a href="{{ route('cliente.index') }}" class="btn fw-bold my-2 p-2" style="background-color: #843cf8; color: #fff">Cliente</a>
          </div>
        </form>
    </div>
  </div>
    
@endsection