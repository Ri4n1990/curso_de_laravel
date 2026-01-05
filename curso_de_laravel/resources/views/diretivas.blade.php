<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diretivas</title>
</head>
<body>
    
    {{-- @if($nome == 'carlin')
        <h1>Eae carlin</h1>

    @elseif($nome == 'lolis')
        <h1>eae Lolis </h1>

    @else
        <h1>não conheço o magrão</h1>
    
    @endif --}}

    {{-- @unless($nome == 'potis')
        <p>É o carlin</p>
        
    @endunless --}}

{{-- 
    @isset($nome)
    
        <p>si bixo existe </p>
        
    @endisset


    @empty($nome)
        <p>Nome está vazio</p>
    @endempty --}}

    @session('nome')
    
        <p>Tem coisa na session</p>

    @endsession





    <script>
        sessionStorage.setItem('nome' , 'clodoaudo')

    </script>







</body>
</html>