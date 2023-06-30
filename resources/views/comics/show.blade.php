<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite('resources/js/app.js')
    </head>
    <body>
        <h1>{{ $comic->title }}</h1>
        <h2>Serie: {{ $comic['series'] }}, Price: {{ $comic['price'] }}, Sale date: {{ $comic['sale_date'] }}, Type: {{ $comic['type'] }} </h2>
        <img src="{{ $comic->thumb }}" alt="Img">
        <p>{{ $comic->description }}</p>
    </body>
</html>
