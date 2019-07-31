<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/miPrimeraRuta', function(){
  return  "Creé primer ruta en Laravel =P";
});

Route::get('/miSegundaRuta', function(){
  return  view('miSegundaRuta');
});

Route::get('/esPar/{numero}', function($numero){
  if ($numero%2==0) {
    return "$numero es par";
  }
  return "$numero es impar";
});

Route::get('/sumar/{numero1}/{numero2}/{numero3?}', function($numero1, $numero2,$numero3 = NULL){
  return $numero1 + $numero2 + $numero3;
});

/*Route::get('/peliculas', function(){
  $peliculas = [
    0 =>[
      "titulo" => "Star Wars",
      "rating" => 10
    ],
    /*1 =>['Super 8', 8],
    2 =>['Harry Potter', 8],
    3 =>['Amelie', 8],
    4 =>['Eterno Resplandor',9]
  ];
  return  view('peliculas', compact('peliculas'));
});*/
Route::get('/peliculas', 'MoviesController@todosLasPeliculas');

Route::get('/actors', 'ActorController@directory');

Route::get('/actors', 'ActorController@todosLosActores');

Route::get('/actor/{id}', 'ActorController@show');

Route::get('/actors/buscar', 'ActorController@search');

Route::get('/actors/add', 'ActorController@create');

Route::post('/actors/add', 'ActorController@store');






/*'Star Wars', 'Super 8', 'Harry Potter', 'Amelie', 'Eterno Resplandor'*/
