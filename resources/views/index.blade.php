<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecto2</title>

</head>
<body>
<div>
    <h3>Estás en el index</h3>
    <a href="{{route("nombre_login")}}">Login</a><br>
    <a href="{{route("nombre_registrar")}}">Registrar</a>
</div>
</body>
</html>
