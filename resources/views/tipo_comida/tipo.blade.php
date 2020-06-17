@extends('layouts.plantilla')

@section('content')

<h2 class="text-center mt-3 text-left">{{$tipo}}</h2>

<div class="row">

	@foreach($recetas as $receta)

	<div class="col-12 col-sm-6 col-md-4 col-lg-3nm d-flex align-items stretch">

	<div class="card my-3 p-2  shadow-sm color-fondo">

		<img src="{{asset($receta->imagen)}}"alt="imagen de {{$receta ->nombre}}" class ="card-img-top rounded rounded-circle">

		<div class="card-body">

			<h4 class="card-title">{{$receta -> nombre}}</h4>
			<p class="card-text">{{ $receta -> titulo}}</p>
			</div>
			<div class="card-footer text-center">


			<a href="{{ route('receta',['receta'=> $receta-> id ]) }}" class="myButton"> Ver Mas
			</a>
		</div>
	</div>
	</div>
	@endforeach
</div>
@endsection