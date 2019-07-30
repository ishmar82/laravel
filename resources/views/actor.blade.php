<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>{{$titulo}} {{$actor->first_name}}</h2>

    <p>Nombre: {{$actor->first_name}}</p>
    <p>Apellido: {{$actor->last_name}}</p>
    <p>Rating: {{$actor->rating}}</p>
    <p>Peli Fav: {{$actor->favorite_movie_id}}</p>

  </body>
</html>
