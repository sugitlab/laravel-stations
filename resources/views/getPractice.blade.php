<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>getPractice</title>
</head>

<body>
  <ul>
    @foreach ($practices as $practice)
    <li>タイトル: {{ $practice->title }}</li>
    @endforeach
  </ul>
</body>

</html>