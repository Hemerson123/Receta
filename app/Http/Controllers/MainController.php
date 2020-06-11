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

    }
  
    
}