<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <title>Administradores</title>
    @vite('resources/js/app.js')
    @vite('resources/js/outro.js')
    
</head>
<body>

    <h1>Dados</h1>
    <p>Dados de {{$nome}}</p>

    <p id="genero"></p>
    <p id="idade"></p>
    <p id="pais"></p>

    <button id="dados">Trazer dados</button>



   
    
    
</body>
</html>