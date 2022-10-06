<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>getMovies</title>
</head>

<body>
  <ul>
    @foreach ($movies as $movie)
    <li>
      <span>タイトル: {{ $movie->title }}</span>
      <span>画像: <img src="{{ $movie->image_url }}" maxWidth="200" height="200" /> </span>
    </li>
    <div>
      CreatedAt: {{$movie->created_at}}
      UpdatedAt: {{$movie->updated}}
    </div>
    @endforeach
  </ul>
</body>

</html>