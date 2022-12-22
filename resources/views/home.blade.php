<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Laravel primi passi</title>
</head>

<body>
    <h1> {{ $saluto }} </h1>

    @if ($stampa_immagine)
        <div class="img">
            <img src="https://pbs.twimg.com/profile_images/587949417577066499/3uCD4xxY_400x400.jpg" alt="">
        </div>
    @else
        <div class="img">
            <img src="https://media.gqitalia.it/photos/5cc2c034d91c291ba14e9ec9/master/w_1600%2Cc_limit/Meme%2520Terrapiattisti4.png" alt="">
        </div>
        <p>
            LA TERRA è PIATTA!
        </p>
    @endif
        @if ($stampa_immagine)
            <ul>
                @foreach ($informazioni as $info)
                    <li> {{ $info }} </li>
                @endforeach
            </ul>
        @endif
</body>

</html>
