<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Ciao mondo</h1>
    <p>il mio nome è {{$nome}}, {{$cognome}}</p>
    <p>le mie proprieà sono:</p>
    <ul>
        @foreach ($proprietà as $item)
            <li>{{$item}}</li>    
        @endforeach
    </ul>
</body>
</html>