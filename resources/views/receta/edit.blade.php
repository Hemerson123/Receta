@extends('layouts.plantilla')

@section('content')


<div class="container">

	
	<form method="POST" action="{{route('recetas.update',['receta'=> $receta-> id])}}" enctype="multipart/form-data">

		@csrf
		@method('PUT')

		<div class="form-row dancing">
		<label>NOMBRE</label>
		<input type="text" name="nombre" class="form-control" value="{{$receta->nombre}}" required>
		</div>


		<div class="form-row dancing">
		<label>INGREDIENTES</label>
		<textarea name="descripcion" class="form-control" rows="4" required >{{$receta->ingredientes}}
		</textarea>
		</div>

		<div class="form-row dancing">
		<label>PREPARACIÓN</label>
		<textarea name="descripcion" class="form-control" rows="4" required >{{$receta->preparacion}}</textarea>
		</div>
		
		<div class="form-row dancing">
		<label>TIPO</label>

		<select  name="tipo" class="form-control">
 	    <option value="comida" selected="@if ($receta->tipo=="comida" ) {'selected'} else{''} @endif ">COMIDA</option>
 	    <option value="bebida" selected="@if ($receta->tipo=="bebida" ) {'selected'} else{''} @endif ">BEBIDA</option>
 	    <option value="merienda" selected="@if ($receta->tipo=="merienda" ) {'selected'} else{''} @endif ">SNACK</option>
 	    <option value="postre" selected="@if ($receta->tipo=="postre" ) {'selected'} else{''} @endif ">POSTRE</option>
        </select>
		</div>

		<div class="form-row dancing">
		<label class="m-2">ENLACE VIDEO</label>
		<input type="text" name="Enlace" class="form-control" value="{{$receta->enlace_video}}" required>
		</div>

		<div class="form-row dancing">
		<label class="m-1">IMAGEN</label>
		<input type="file" name="imagen" class="form-control-fle m-3" value="{{$receta->imagen}}" required>
		</div>

		<div class="mb-4">
			<button type="reset" class="myButton2 " >
				GUARDAR
			</button>

			<button type="reset" class="myButton2 ">
				LIMPIAR
			</button>

		<a href="{{route('recetas.index')}}" class="myButton2 ">
			VOLVER
		</a>
	</div>

			
		
	</form>
	</div>
</div>
@endsection