@extends('layouts.plantilla')

@section('content')


<div class="container">

	<h1 class="text-center">Agregar Receta</h1>
	<form method="POST" action="{{route('recetas.store')}}" enctype="multipart/form-data">

		@csrf

		<div class="form-row">
		<label>Nombre</label>
		<input type="text" name="nombre" class="form-control" required>
		</div>

		<div class="form-row ">
		<label>ingredientes</label>
		<textarea name="ingredientes" class="form-control" rows="4" required>
		</textarea>
		</div>

		<div class="form-row ">
		<label>preparacion</label>
		<textarea name="preparacion" class="form-control" rows="4" required>
		</textarea>
		</div>

		<div class="form-row">
		<label>Enlace al Video</label>
		<input type="text" name="enlace_video" class="form-control" required>
		</div>

		<div class="form-row ">
		<label>tipo</label>
		<select  name="tipo" class="form-control text-dancing">
 	    <option value="bebida">BEBIDA</option>
 	    <option value="comida">COMIDA</option>
 	    <option value="bebida">BEBIDA</option>
 	    <option value="merienda">MERIENDA</option>
 	    <option value="postre">POSTRE</option>
        </select>
		</div>

		<div class="form-row">
		<label class="mt-4 mr-4">Imagen   </label>
		<input type="file" name="imagen" class="form-control-fle mt-4 mr-4">
		</div>

		<div>
			<button type="submit" class="myButton2" >
				Guardar
			</button>

			<button type="reset" class=" myButton2">
				Limpiar
			</button>

		<a href="{{route('recetas.index')}}" class=" myButton2">
			Atras
		</a>
	</form>
	</div>
</div>
@endsection