<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Best DB MOvies</title>
</head>
<body>
    
    <ul>
        @foreach ($movies as $movie)
        <h3>Titolo: <span class="risultato">{{$movie["title"]}}</span></h3>
        <h3>Titolo originale: {{$movie["original_title"]}}</h3>
        <h3>Nazionalità: {{$movie["nationality"]}}</h3>
        @endforeach
    </ul>
</body>
</html>