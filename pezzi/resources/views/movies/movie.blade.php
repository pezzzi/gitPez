<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>{{$movie->title}}</h2>
    Rating: <h3>{{$movie->rating}}</h3>
    Awards: <h3>{{$movie->awards}}</h3>
    Genre: {{$genre->name}}<br><br>
    Actors:
    @foreach ($actors as $actor)
      {{$actor->getFullName()}}<br>
    @endforeach
  </body>
</html>
