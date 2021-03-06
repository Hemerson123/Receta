<?php

namespace App\Http\Controllers;

use App\Receta;
use Illuminate\Http\Request;
use App\Http\Requests\RecetaRequest;
use Illuminate\Support\Facades\File;

class RecetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     

      $recetas = Receta::all();

    return view('receta.index')->with(['recetas'=>$recetas]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('receta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RecetaRequest $request)
    {
         //$request ->validated();
        $datos= $request-> all();

        if($request ->file('imagen')){
            $archivo = $request-> file('imagen');
            $nombrearchivo = $archivo -> getClientOriginalName();
            $archivo ->move(public_path('img'), $nombrearchivo);
            $datos['imagen'] = 'img/'. $nombrearchivo;
        }

            $receta = receta::create ($datos);

        return redirect()->route('recetas.index')
        ->withSuccess("la receta con id {$receta->id} se ha creado");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function show(Receta $receta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function edit(Receta $receta)
    {
        return view('receta.edit')->with(['receta'=>$receta]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function update(RecetaRequest $request, Receta $receta)
    {
         $datos =$request->all();

     if($request ->file('imagen'))
    {
            $archivo = ($request ->file('imagen'));
            $nombrearchivo = $archivo -> getClientOriginalName();
            $archivo ->move(public_path('img'), $nombrearchivo);
            $datos['imagen'] = 'img/'. $nombrearchivo;
            File::delete($receta->imagen);
        }
        


        $receta-> update($datos);

            
        return Redirect() ->route('recetas.index')
        ->withSuccess("la receta con id {$receta->id} se ha actualizado");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Receta $receta)
    {
        $receta->delete();

        return Redirect() ->route('recetas.index')
        ->withSuccess("La receta con id {$receta->id} se ha eliminado");
    }
}
