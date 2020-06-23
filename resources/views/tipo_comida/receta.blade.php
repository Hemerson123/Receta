@extends('layouts.plantilla')


@section('content')
<h1 class="text-center text -md-left dancing"> {{ $receta->nombre }} </h1>

<div class="row flex align-items-md-center">

<div class="col-12 col-md-6 color-fondo">

	<img src= "{{asset($receta->imagen)}}" 
		 alt="Imagen de {{$receta->nombre}}"
		 class= "img-fluid p-4 ">
		
	</div>
	 <div class= "col-12 text-center col-md-6 text-md-left ">
		 	<h4>{{$receta ->titulo}}</h4>
		 	<p>{{$receta -> ingredientes}}</p>
		 	<p>{{$receta -> preparacion}}</p>
		 	<p>{{$receta -> tipo}}</p>
</div>
</div>

@endsection 