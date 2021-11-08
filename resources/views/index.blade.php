<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Best DB MOvies</title>
    <link rel="stylesheet" href="css/app.css">

</head>
<body>
    <header>
        <div class="block-logo">
            <img src="{{asset("images/BlockBuster-logo.png")}}" alt="">
        </div>
    </header>
    
    <ul class="movies-container">
        @foreach ($movies as $movie)
        <li class="card">
            <h3>Titolo: <span class="risultato">{{$movie["title"]}}</span></h3>
            <h4>Titolo originale: <span class="risultato">{{$movie["original_title"]}}</span></h4>
            <h4>Nazionalità: <span class="risultato">{{$movie["nationality"]}}</span></h4>
            <h4>Data di uscita: <span class="risultato">{{$movie["date"]}}</span></h4>
            <h4>Voto: <span class="risultato">{{$movie["vote"]}}</span></h4>
        </li>
        @endforeach
    </ul>
</body>
</html>