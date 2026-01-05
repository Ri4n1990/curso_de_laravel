<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('titulo', 'sem título') </title>
    <link rel="stylesheet" href="/css/padrao.css">
    @yield('css')
    @yield('js')
    
</head>
<body>


    <header>

        @section('pre')

        <h1 id = "msg">Meu site.com</h1>


        @show



    </header>

    
    @yield('conteudo')
    
</body>
</html>