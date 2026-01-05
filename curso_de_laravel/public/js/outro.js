let dados = {
            'nome' : 'pedrão',
            'nascimento' : '2004-03-01',
            'peso' : 'base de tonelada meu galo'
        }


        // $('#req').click(()=>{

        //     $.ajax({
        //         url :'/user',
        //         method : 'POST',
        //         contentType : 'application/json',
        //         data : JSON.stringify(dados),
        //         success : function(resposta, textostatus, xhr){

        //             console.log(`chegou meu galo ${xhr.status}`)
        //             console.log(resposta)

        //         },

        //         error : function(xhr,textoerro,errorthrow){
        //             console.log('é deu ruim meu galo cinza')
        //         }
        //     })

        // })


    // $('#adi').click(()=>{
    //     console.log('oi')
    //     $.ajax({
    //         url : '/cliente',
    //         method : 'GET',
    //         success : function(resposta, statustexto,xhr){

    //             console.log('chegou!')
    //             $('#nome').text(resposta.nome)
    //             $('#peso').text(resposta.peso)
                
    //         },

    //         error: function(xhr, textoerro, trhowerro){

    //             alert('deu ruim!')

    //         }
    //     })
    // })

    

$('#dados').click(()=>{
            $.ajax({
                method : 'GET',
                url : '/dados_cliente',
                success : function(dados,status,xhr){
                    console.log(xhr.status)
                    $('#genero').text(dados.genero)
                    $('#idade').text(dados.idade)
                    $('#pais').text(dados.pais)
                },

                error: function(xhr,status,throwerro){
                    alert('Algo saiu errado!', xhr.status)
                }
            })
        })
