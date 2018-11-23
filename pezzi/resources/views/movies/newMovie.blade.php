<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Add movie:</h2>
    <form class="" action="/movies/" method="post">
        Title: <input type="text" name="title" value="">
        Rating: <input type="number" name="rating" value="">
        Awards: <input type="number" name="awards" value="">
        Length: <input type="number" name="length" value="">
        Genre: <select class="" name="genre">
          @foreach ($genres as $genre)
            <option value="{{$genre->name}}">{{$genre->name}}</option>
          @endforeach
        </select>
    </form>
  </body>
</html>
