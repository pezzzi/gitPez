<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="/actors/search" method="get">
      Nombre del actor: <input type="text" name="name" value="">
    </form>

    <form class="" action="/actors" method="get">
      <button type="submit" name="">Sacar filtro</button>
    </form>

    @foreach ($actors as $actor)
      <a href="actors/{{$actor->id}}">{{ $actor->getFullName() }}</a><br>
    @endforeach
  </body>
</html>
