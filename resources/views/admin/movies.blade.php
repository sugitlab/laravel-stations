<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel='stylesheet' href='/css/app.css' type='text/css'>
  <title>admin-movies</title>
</head>

<body>
  <table>
    <thead>
      <tr>
        <td>
          ID
        </td>
        <td>
          映画タイトル
        </td>
        <td>
          画像URL
        </td>
        <td>
          公開年
        </td>
        <td>
          公開中かどうか
        </td>
        <td>
          概要
        </td>
        <td>
          登録日時
        </td>
        <td>
          更新日時
        </td>
      </tr>
    </thead>
    <tbody>
      @foreach ($movies as $movie)
      <tr>
        <td>
          {{ $movie->id }}
        </td>
        <td>
          {{ $movie->title }}
        </td>
        <td>
          <img src="{{ $movie->image_url }}" width="100px" />
        </td>
        <td>
          {{ $movie->published_year }}
        </td>
        <td>
          {{ $movie->is_showing ? '上映中' : '上映予定' }}
        </td>
        <td>
          {{ $movie->description }}
        </td>
        <td>
          {{ $movie->created_at }}
        </td>
        <td>
          {{ $movie->updated_at }}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>

</html>