<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Peliculas</h2>
    <ul>
    
 </ul>

 <ul>
   @if (empty($peliculas))
     <li>No hay peliculas</li>
   @else
     @foreach ($peliculas as $posicion=>$pelicula)
     <li>Titulo: {{ $pelicula["titulo"] }}//// Rating:{{ $pelicula["rating"] }}</li>
     @endforeach
 @endif
</ul>
  </body>
</html>
