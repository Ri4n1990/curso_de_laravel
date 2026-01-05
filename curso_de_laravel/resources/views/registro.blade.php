<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js" ></script>
     <script src="/js/app.js" defer></script>

     <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>
<body>


    <form action="#" id="formulario">

        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <label for="nascimento">Data de nascimento</label>
        <input type="date" name="nascimento" id="nascimento">

        <label for="idade">Idade</label>
        <input type="number" name="idade" id="idade">

        <input type = "submit">Enviar</input>



    </form>


    <script>

        $('#formulario').on('submit' , function(e){
            e.preventDefault()

            let dados = {}

            $(this).serializeArray().forEach(campo => {
                dados[campo.name] = campo.value
                
            });

            console.log(dados['nome'])




            


        })
       
    </script>


    
    
</body>
</html>