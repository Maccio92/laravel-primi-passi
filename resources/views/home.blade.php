<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <ul>
            <li><a href="{{ route('contact')}}">Contatti</a></li>
            <li><a href="{{ route('about')}}">About</a></li>
        </ul>
    </header>
    <h1>Ciao {{ $name }} {{ $lastname }}</h1>
    <h2>La tua cittadinanza: {{ $cittadinanza }}</h2>
</body>
</html>