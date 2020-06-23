@extends('layouts.plantilla')

@section('content')


<h1 class="text-center mb-2 text-dark dancing font-weight-bolder display-3">RECETAS DE COCINA</h1>
<h4 class="text-center mb-2 text-dark dancing font-weight-bolder display-4 mt-5">Crea, Busca y Comparte Tus Recetas</h4>



<div class="d-flex justify-content-around  align-items-center row mt-5">
	<a href="{{route('comida')}}" class="btn btn-secondary myButton mb-1">Comida</a>
	<a href="{{route('bebida')}}" class="btn btn-secondary myButton mb-1">Bebida</a>
	<a href="{{route('merienda')}}" class="btn btn-secondary myButton mb-1">Snack</a>
	<a href="{{route('postre')}}" class="btn btn-secondary myButton mb-1">Postre</a>


</div>
@endsection 