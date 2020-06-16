@extends('layouts.plantilla')

@section('content')
<div >
	<h1 class="text-center">RECETAS</h1>

	<a href= "{{route('recetas.create')}}" class="myButton m-3">Crear</a>


	<div class="table-responsive shadow">
		<table class="table-striped border">
			<thead class="thead-light">
				<tr>
				<th class="  text-center d-md-table-cell">ID</th>
				<th class="  text-center">Nombre</th>
				<th class="  text-center d-md-table-cell">ingredientes</th>
				<th class="  text-center d-md-table-cell">preparacion</th>
				<th class="  text-center d-md-table-cell">tipo</th>
				<th class="  text-center d-md-table-cell">Imagen</th>
				<th class="  text-center d-md-table-cell">enlace_video</th>
				</tr>
			</thead>
			<tbody>
				@foreach($recetas as $receta)
<tr>
	<td class=" d-md-table-cell">{{$receta ->id}}</td>
	<td>{{$receta ->nombre}}</td>
	<td class=" d-md-table-cell">{{$receta ->ingredientes}}</td>
	<td class=" d-md-table-cell">{{$receta ->preparacion}}</td>
	<td class=" d-md-table-cell">{{$receta ->tipo}}</td>
	<td class=" d-md-table-cell">{{$receta ->imagen}}</td>
	<td class=" d-md-table-cell">{{$receta ->enlace_video}}</td>
	<td>
		<a href="{{route('recetas.edit',['receta'=> $receta->id])}}" class="myButton d-block text-center mb-2">
			<i class="fas fa-edit icono2"></i>
		</a>
		<form method="POST" class="d-inline" action="{{route('recetas.destroy',['receta'=>$receta->id])}}">
			@csrf
			@method('DELETE')
			<button type="submit" class="myButton d-block text-center mb-2"onclick="return confirm('¿Seguro que quieres elimarlo? text-dark')">

			<i class="fas fa-trash-alt icono"></i>

		</button>

		</form>
	</td>
</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection