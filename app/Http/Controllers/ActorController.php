<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actors;

class ActorController extends Controller
{
  public function directory(){
    return view('actores', compact(''));
  }

  public function todosLosActores(){
     $actors = Actors::orderBy('first_name', 'DESC')->get();
     return view('actores', compact('actors'));
  }

  public function show($id){
    $actor = Actors::find($id);
    $titulo = 'Información de ';
    return view('actor', compact('actor', 'titulo'));
  }

  public function search(){
  $resultado = Actors::where("first_name", "like", "%".$_GET['buscar']."%")
    ->get();
    return view('actors', compact('resultado'));
  }
}
