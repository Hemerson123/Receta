<!doctype html>
<html lang="es">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

<link rel="stylesheet" href={{asset('css/app.css')}}>
<link rel="stylesheet" href="{{asset('css/estilos.css')}}">

    <title>COCINANDO :´V</title>

  </head>

  <body>

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

  		<a href="{{ route('main') }}" class="text-decoration-none text-dark">

  		<h1 class="text-center">RECETAS DE COCINA</h1>
	</a>

  	@yield('content')

      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="/js/app.js"></script>

  </body>
</html>