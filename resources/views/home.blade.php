
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World!</title>
</head>
<body>
    <ul>
        <li><a href="{{route('home')}}">Home</a></li>
        <li><a href="{{route('contatti')}}">Contatti</a></li>
        <li><a href="{{route('dove-siamo')}}">Dove Siamo</a></li>
    </ul>
    <h1>Hello World</h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum tempore, architecto nulla pariatur dolores corporis neque delectus eligendi mollitia est blanditiis quaerat necessitatibus, distinctio tenetur provident nesciunt nam minima omnis.</p>
    <div>
        <h2>{{$name}} {{$surname}}</h2>
        <p>{{$says}}</p>
    </div>
</body>
</html>