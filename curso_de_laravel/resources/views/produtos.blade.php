<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>

</head>
<body>

    <h1>Produtos</h1>

    <ul>

        @foreach($produtos as $prod)
        
            <li>{{$prod}} {{$loop->index}}</li>

        @endforeach

    </ul>

    <ul>

        @for($index=0;$index <=10; $index++)
            <li> num {{$index}}</li>
        @endfor



    </ul>
    
    
</body>
</html>