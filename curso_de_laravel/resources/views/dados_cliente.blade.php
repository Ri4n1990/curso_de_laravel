<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados cliente</title>
</head>
<body>

    <form action="{{route('check_dados')}}" method="POST">
        
        @csrf

        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" placeholder="Insira seu nome">
        </div>

        <button type="submit">Enviar</button>
        

    </form>
    
</body>
</html>