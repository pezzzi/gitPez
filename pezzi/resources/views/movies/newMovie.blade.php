<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Add movie:</h2>
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
        Title: <input type="text" name="title" value="{{ old('title') }}">
        Rating: <input type="number" name="rating" value="{{ old('rating') }}">
        Awards: <input type="number" name="awards" value="{{ old('awards') }}">
        Length: <input type="number" name="length" value="{{ old('length') }}">
        Genre: <select class="" name="genre">
          @foreach ($genres as $genre)
            <option value="{{$genre->name}}">{{$genre->name}}</option>
          @endforeach
        </select>
        <button type="submit" name="button">Save</button>
    </form>
  </body>
</html>
