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
    <ul>
    {{-- @foreach ($refs as $ref)
        @if ($ref=='')
            <a href="/{{$ref}}">home</a>    
        @else
            <a href="/{{$ref}}">{{$ref}}</a>
        @endif
    @endforeach --}}
        <li><a href="/">home</a></li>
        <li><a href="/chi_sono">chi sono</a></li>
        <li><a href="/dettagli_oggetto">dettagli oggetto</a></li>
    </ul>
</body>
</html>