<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('contatti')}}">Contatti</a></li>
            <li><a href="{{route('dove-siamo')}}">Dove Siamo</a></li>
        </ul>
    </nav>
    <h1>Dove siamo</h1>
    <p>Indirizzo: {{$indirizzo}}, Città: {{$citta}}, Citofono: {{$citofono}}.</p>
</body>
</html>