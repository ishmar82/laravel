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
   @if (empty($movies))
     <li>No hay peliculas</li>
   @else
     @foreach ($movies as $movie)
     <li>Titulo: {{ $movie->title }}</li>
     @endforeach
 @endif
</ul>
  </body>
</html>
