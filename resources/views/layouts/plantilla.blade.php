<!doctype html>
<html lang="es">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

<link rel="stylesheet" href={{asset('css/app.css')}}>
<link rel="stylesheet" href="{{asset('css/estilos.css')}}">

    <title>RECETAS</title>

  </head>

  <body>


<nav class="navbar navbar-expand-lg bg-dark navbar-dark">

  <a class="navbar-brand" href="{{ route('main') }}" >

    <h5 class="text-left font-weight-bolder dancing">PAGINA PRINCIPAL</h5>

  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">

        <a class="nav-link " href="{{ route('recetas.index') }}" >

          <h7 class="text-left font-weight-bolder dancing">AGREGAR</h7>
        </a>
     
    </ul>
  </div>
</nav>
  	<div class="container ">

       <div class="py-4">
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>

                @endif

                @if(isset($errors) && $errors->any())
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </div>
                @endif
            </div>
  	

  	@yield('content')

      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="/js/app.js"></script>

  </body>
</html>