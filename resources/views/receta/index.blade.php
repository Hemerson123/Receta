@extends('layouts.plantilla')

@section('content')
<div >
	<h1 class="text-center dancing">RECETAS</h1>


	<div class="table-responsive shadow">
		<table class="table border">
			<thead class="thead-light">
				<tr>
				<th class="  text-center dancing">Imagen</th>
				<th class="  text-center dancing">Nombre</th>
				<th class=" d-none text-center d-md-table-cell dancing">Ingredientes</th>
				<th class=" d-none text-center d-lg-table-cell dancing">Preparacion</th>
				<th class="  d-none text-center d-lg-table-cell dancing">Tipo</th>
				
				<th class="  d-none text-center d-md-table-cell dancing">Video</th>
				<th class="  text-center dancing">Acciones</th>

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
	<td class=" d-none d-lg-table-cell">{{$receta ->preparacion}}</td>
	<td class=" d-none d-lg-table-cell">{{$receta ->tipo}}</td>
	
	<td class=" d-none d-md-table-cell" >
		<a href="{{$receta ->enlace_video}}">Video</a>
	</td>
	<td>
		<a href="{{route('recetas.edit',['receta'=> $receta->id])}}" class=" myButton1 d-block text-center mb-2">
			EDITAR
		</a>
		<form method="POST" class=" d-inline" action="{{route('recetas.destroy',['receta'=>$receta->id])}}">
			@csrf
			@method('DELETE')
			<button type="submit" class=" myButton1 d-block text-center mb-"onclick="return confirm('¿Seguro que quieres elimarlo? text-dark')">
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