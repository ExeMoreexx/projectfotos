<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    {{-- Bootstrap 5 Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <style>

        #boton-logIn:hover {
            background-color: #7021f0;
            transition: 1s ease all;
        }

        #boton-register:hover {
            color: #7021f0;
            transition: 1s ease all;
        }

        #boton-agg {
          color: #fff;
          background-color: #843cf8;
        }

        #boton-agg:hover {
            background-color: #7021f0;
            transition: 1s ease all;
        }

    </style>
    <title>@yield('title') | Laravel App</title>
</head>
<body class="bg-light">

    <nav class="navbar navbar-dark navbar-expand-lg fw-bold p-1 mb-5" style="background-color: #843cf8">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Laravel App</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          @if (auth()->check() )
          <ul class="navbar-nav mt-2 mb-0">
            
            @if(auth()->user()->role=="admin")          
            <li class="nav-item">
              <a class="btn btn-dark fw-bold me-2 text-light" href="{{ route('fotos.index') }}" role="button">Fotos</a>
            </li>
            @else
            @endif
            <li class="nav-item">
              <a class="btn btn-danger fw-bold me-2" href="{{ route('login.destroy') }}" role="button">Log Out</a>
            </li>
            <li class="nav-item">
              <p class="me-3 fw-bold mt-2 text-light">Welcome {{ auth()->user()->name }}</p>
            </li>
          </ul>              
          @else
          <ul class="navbar-nav mt-2 mb-2">
            <li class="nav-item">
              <a id="boton-logIn" class="btn me-2 fw-bold" href="{{ route('login.index') }}" role="button" style="color: #fff;">Log In</a>
            </li>
            <li class="nav-item">
              <a id="boton-register" class="btn btn-outline-light fw-bold" href="{{ route('register.index') }}" role="button">Register</a>
            </li>
          </ul>
          @endif
        </div>
      </nav>
      
    @yield('content')

    {{-- Bootstrap JavaScrip --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.7.14/dist/vue.js"></script>
    <script>
      const app=new Vue({
        el: "#element",
        data:{
              precio:""
        },
        methods:{
              add(){
                  this.axios.get('http://localhost:8000/')
              }
        }
    
      })
    </script>

</body>
</html>