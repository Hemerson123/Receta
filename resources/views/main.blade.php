@extends('layouts.plantilla')

@section('content')


<h1 class="text-center mb-2 text-dark dancing font-weight-bolder display-3">RECETAS DE COCINA</h1>


<div class="d-flex justify-content-around full-height align-items-center row">
	<a href="{{route('comida')}}" class="btn btn-secondary myButton">Comida</a>
	<a href="{{route('bebida')}}" class="btn btn-secondary myButton">Bebida</a>
	<a href="{{route('merienda')}}" class="btn btn-secondary myButton">Merienda</a>
	<a href="{{route('postre')}}" class="btn btn-secondary myButton">Postre</a>


</div>
@endsection 