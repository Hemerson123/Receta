@extends('layouts.plantilla')

@section('content')


<div class="container">

	
	<form method="POST" action="{{route('recetas.update',['receta'=> $receta-> id])}}" enctype="multipart/form-data">

		@csrf
		@method('PUT')

		<div class="form-row">
		<label>Nombre</label>
		<input type="text" name="nombre" class="form-control" value="{{$receta->nombre}}" required>
		</div>


		<div class="form-row">
		<label>ingredientes</label>
		<textarea name="descripcion" class="form-control" rows="4" required >{{$receta->ingredientes}}
		</textarea>
		</div>

		<div class="form-row">
		<label>preparacion</label>
		<textarea name="descripcion" class="form-control" rows="4" required >{{$receta->preparacion}}
		</textarea>
		</div>
		
		<div class="form-row ">
		<label>tipo</label>
		<select  name="tipo" class="form-control">
 	    <option value="comida" selected="@if ($receta->tipo=="comida" ) {'selected'} else{''} @endif ">COMIDA</option>
 	    <option value="bebida" selected="@if ($receta->tipo=="bebida" ) {'selected'} else{''} @endif ">BEBIDA</option>
 	    <option value="merienda" selected="@if ($receta->tipo=="merienda" ) {'selected'} else{''} @endif ">MERIENDA</option>
 	    <option value="postre" selected="@if ($receta->tipo=="postre" ) {'selected'} else{''} @endif ">POSTRE</option>
        </select>
		</div>

		<div class="form-row ">
		<label>Enlace del Video</label>
		<input type="text" name="Enlace" class="form-control" value="{{$receta->enlace_video}}" required>
		</div>

		<div class="form-row">
		<label class="m-3">Imagen   </label>
		<input type="file" name="imagen" class="form-control-fle m-3" value="{{$receta->imagen}}" required>


		


		</div>

		<div>
			<button >
				guardar
			</button>

			<button type="reset" class="btn btn primary mt-2 ml-4">
				<i class="fab fa-leanpub"></i>
			</button>

		<a href="{{route('recetas.index')}}" class="btn btn-danger btn-lg text-light">
			<i class="fas fa-undo-alt"></i>
		</a>

			
		
	</form>
	</div>
</div>
@endsection