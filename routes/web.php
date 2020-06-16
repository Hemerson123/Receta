<?php

use Illuminate\Support\Facades\Route;



Route::get('/','MainController@index')->name('main');
Route::get('receta/{receta}', 'MainController@show')->name('receta');

Route::get('comida','MainController@comida')->name('comida');
Route::get('bebida','MainController@bebida')->name('bebida');
Route::get('postre','MainController@postre')->name('postre');
Route::get('merienda','MainController@merienda')->name('merienda');


Route::resource('/recetas','RecetaController');

