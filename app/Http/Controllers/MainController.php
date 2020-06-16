<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Receta;

class MainController extends Controller
{
    public function index()
    { 

    	return view('main');
    	
    	//return $heroes;
    }

    public function show (Receta $receta) {

    	return view('receta')-> with (['receta'=> $receta]);
    }

    public function comida(){

        $recetas = Receta::where('tipo','comida')
        ->orderBy('nombre','desc')
        ->get();

        $tipo = "COMIDAS";

        return view('tipo_comida.tipo')-> with (['recetas'=> $recetas,'tipo'=> $tipo]);

    }

    public function bebida(){

        $recetas = Receta::where('tipo','bebida')
        ->orderBy('nombre','desc')
        ->get();

        $tipo= "BEBIDAS";
        return view('tipo_comida.tipo')-> with (['recetas'=> $recetas, 'tipo'=> $tipo]);

    }

    public function postre(){

        $recetas = Receta::where('tipo','postre')
        ->orderBy('nombre','desc')
        ->get();

        $tipo= "POSTRE";
        return view('tipo_comida.tipo')-> with (['recetas'=> $recetas, 'tipo'=> $tipo]);

    }

    public function merienda(){

        $recetas = Receta::where('tipo','merienda')
        ->orderBy('nombre','desc')
        ->get();

        $tipo = "MERIENDA";
        return view('tipo_comida.tipo')-> with (['recetas'=> $recetas,'tipo'=> $tipo]);
    }
  
    
}