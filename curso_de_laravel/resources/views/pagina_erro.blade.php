<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>erro</title>
</head>
<body>

    <h1>Essa é a página de erro</h1>

    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $erro)
            <li>{{ $erro }}</li>
        @endforeach
    </ul>
@endif



    <form action="{{route('cadastro')}}" method="POST">

        @csrf

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <label for="cpf">CPF</label>
        <input type="text" name="cpf" id="cpf">

        <label for="idade">idade</label>
        <input type="number" name="idade" id="idade">

        <button type = 'submit'>Enviar</button>







    </form>


    
</body>
</html>