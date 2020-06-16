<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Receta;
use Faker\Generator as Faker;


$factory->define(Receta::class, function (Faker $faker)
 {
	$nombreimagen= 'img/'.$faker ->randomElement
	(['cafe','pan','pastel','pollo']).'.jpg';

	$enlace_video= $faker ->randomElement
	(['https://www.youtube.com/watch?v=EvnZFWnnZ_A',
	  'https://www.youtube.com/watch?v=Tdo7GT1M6_k',
	  'https://www.youtube.com/watch?v=FwSYEAWg9o0',
	  'https://www.youtube.com/watch?v=rWHjialBaX0']);

	$tipo= $faker ->randomElement
	(['comida','bebida','postre','merienda']);

    return 
    [
    	'nombre' => $faker->name,
    	'ingredientes'=> $faker->paragraph(1),
    	'preparacion' => $faker->paragraph(2),
    	'tipo' => $tipo,
    	'imagen'=> $nombreimagen,
    	'enlace_video' => $enlace_video,

        
    ];
});