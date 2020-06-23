@extends('layouts.plantilla')

@section('content')


<div class="container">

	<h1 class="text-center dancing">Agregar Receta</h1>
	<form method="POST" action="{{route('recetas.store')}}" enctype="multipart/form-data">

		@csrf

		<div class="form-row dancing">
		<label>NOMBRE</label>
		<input type="text" name="nombre" class="form-control" required>
		</div>

		<div class="form-row dancing ">
		<label>INGREDIENTES</label>
		<textarea name="ingredientes" class="form-control" rows="4" required>
		</textarea>
		</div>

		<div class="form-row dancing">
		<label>PREPARACIÓN</label>
		<textarea name="preparacion" class="form-control" rows="4" required>
		</textarea>
		</div>

		<div class="form-row dancing">
		<label>ENLACE VIDEO</label>
		<input type="text" name="enlace_video" class="form-control" required>
		</div>

		<div class="form-row ml-3 dancing">
		<label>TIPO</label>
		<select  name="tipo" class="form-control text-dancing">
 	    <option value="comida">COMIDA</option>
 	    <option value="bebida">BEBIDA</option>
 	    <option value="merienda">SNACK</option>
 	    <option value="postre">POSTRE</option>
        </select>
		</div>

		<div class="form-row m-3 dancing">
		<label>IMAGEN</label>
		<input type="file" name="imagen" class="form-control-fle mt-4 mr-4">
		</div>

		<div>
			<button type="submit" class="myButton2 mb-1" >
				GUARDAR
			</button>

			<button type="reset" class=" myButton2 mb1">
				LIMPIAR
			</button>

		<a href="{{route('recetas.index')}}" class=" myButton2 mb-1">
			ATRÁS
		</a>
	</form>
	</div>
</div>
@endsection