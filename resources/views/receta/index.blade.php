@extends('layouts.plantilla')

@section('content')
<div >
	<h1 class="text-center dancing">RECETAS</h1>

	<a href= "{{route('recetas.create')}}" class="myButton m-3">Crear</a>


	<div class="table-responsive shadow">
		<table class="table border">
			<thead class="thead-light">
				<tr>
				<th class="  text-center">Imagen</th>
				<th class="  text-center">Nombre</th>
				<th class=" d-none text-center d-md-table-cell">ingredientes</th>
				<th class=" d-none text-center d-md-table-cell">preparacion</th>
				<th class="  d-none text-center d-md-table-cell">tipo</th>
				
				<th class="  text-center d-md-table-cell">enlace_video</th>
				<th class="  text-center">acciones</th>

				</tr>
			</thead>
			<tbody>
				@foreach($recetas as $receta)
<tr>
	<td >
		<img src="{{$receta ->imagen}}" class="img-tabla">
	</td>
	<td>{{$receta ->nombre}}</td>
	<td class=" d-none d-md-table-cell">{{$receta ->ingredientes}}</td>
	<td class=" d-none d-md-table-cell">{{$receta ->preparacion}}</td>
	<td class=" d-none d-md-table-cell">{{$receta ->tipo}}</td>
	
	<td >
		<a href="{{$receta ->enlace_video}}">Video</a>
	</td>
	<td>
		<a href="{{route('recetas.edit',['receta'=> $receta->id])}}" class=" myButton1 d-block text-center mb-2">
			EDITAR
		</a>
		<form method="POST" class=" d-inline" action="{{route('recetas.destroy',['receta'=>$receta->id])}}">
			@csrf
			@method('DELETE')
			<button type="submit" class=" myButton1 d-block text-center mb-2"onclick="return confirm('¿Seguro que quieres elimarlo? text-dark')">
				BORRAR

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