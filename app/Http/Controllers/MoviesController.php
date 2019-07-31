<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movies;

class MoviesController extends Controller
{
  public function todosLasPeliculas(){
     $movies = Movies::orderBy('title')->get();
     return view('peliculas', compact('movies'));
  }


}
