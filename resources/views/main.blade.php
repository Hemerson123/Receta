@extends('layouts.plantilla')

@section('content')


<h3 class="text-left mb-2 text-dark dancing font-weight-bolder">PERFECTAS PARA PREPARAR </h3>


<div class="d-flex justify-content-around full-height align-items-center">
	<a href="{{route('comida')}}" class="btn btn-secondary myButton">COMIDA</a>
	<a href="{{route('bebida')}}" class="btn btn-secondary myButton">BEBIDA</a>
	<a href="{{route('merienda')}}" class="btn btn-secondary myButton">MERIENDA</a>
	<a href="{{route('postre')}}" class="btn btn-secondary myButton">POSTRE</a>


</div>
@endsection 