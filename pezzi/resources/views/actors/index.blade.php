<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @if (count($errors) > 0)
      <div class="alert alert-danger">
        <ul>
          @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    <form class="" action="" method="post">
      @csrf
      First Name: <input type="text" name="first_name" value="{{ old('first_name') }}">
      Last Name: <input type="text" name="last_name" value="{{ old('last_name') }}">
      Rating: <input type="number" name="rating" value="{{ old('rating') }}">
      Favorite Movie: <select class="" name="favorite_movie_id">
        @foreach ($movies as $movie)
          <option value="{{$movie->id}}">{{$movie->title}}</option>
        @endforeach
      </select>
      <button type="submit" name="button">Save</button>
    </form>
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
