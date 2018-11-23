<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Género: {{$genre->name}}</h2>
    @foreach ($movies as $movie)
      <a href="/movie/{{$movie->id}}">{{$movie->title}}</a><br>
    @endforeach
  </body>
</html>
