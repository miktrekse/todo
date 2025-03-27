<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dienasgramata</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<x-navigation></x-navigation>
<li><a href="/diaries/create">Dienasgramatas create</a></li>
<h1>Dienasgramata</h1>
<ul>
  @foreach ($diaries as $diary)
    <li><a href="/diaries/{{ $diary->id }}">{{ $diary->title }}</li>
  @endforeach
</ul>
</body>
</html>