<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>

    <div class="container m-4">

      <h2>Carga tu actor aquí</h2>

      <div class="form-group col-6 mt-4">
        <label for="" class="col-4">Nombre</label>
        <input type="text" name="first_name" value="">
      </div>

      <div class="form-group col-6">
        <label for="" class="col-4">Apellido</label>
        <input type="text" name="last_name" value="">
      </div>

      <div class="form-group col-6">
        <label for="" class="col-4">Rating</label>
        <input type="text" name="rating" value="">
      </div>

      <div class="form-group col-6">
        <label for="" class="col-4">Pelicula Favorita</label>
        <select class="" name="movie_id">
          @foreach ($movies as $movie)
            <option value="">{{ $movie->title}}</option>
          @endforeach
        </select>
      </div>

    </div>

  </body>
</html>
