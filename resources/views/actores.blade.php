<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <h2>Actores</h2>
    <div class="container">
      <form class="" action="/actores/buscar" method="get">
        <input type="text" name="buscar" value="buscar" class="form-control">
        <button type="submit" name="button" >Enviar</button>
      </form>
    </div>
    @foreach ($actors as $actor)
  <li><a href="actor/{{$actor->id}}">{{ $actor->first_name }} {{ $actor->last_name }}</a></li>
    @endforeach
  </body>
</html>
