<?php

use Illuminate\Support\Facades\Route;
use Pest\Support\View;

Route::get('/', function(){
    return 'Olá' ;
})->name('principal');


















/* 

-=-=-=-=- Nomeação de rotas / redirecionamentos / geração de url -=-=-=-=-=-=-=


Route::get('/clientes', function(){

    // $url = route('cliente');
    // echo $url . "<br>";

    // return redirect()->route('principal');
    return to_route('principal');

})->name('cliente');


Route::get('cadastro/{id}' , function(int $id){

    $url = route('cad', ['id' => 30]);
    echo $url ;

    return $id;


})->name('cad');



*/

















/* 

-=-=-=-=-=-=-=-=-= Parâmetros de rotas / Restrições de regex -=-=-=-=-=-=-=-=-

Route::get('/params/{id}/{nome}', function(int $id, string $nome){
    return 'Este é seu id: '. $id . "<br>e nome: " . $nome ;
    
})->where('nome', '[A-Za-z]+');


Route::get('/produtos/{id}', function(int $id){

    return 'Esse é o id do produto: ' . $id ;

});


*/







/* 

-=-=-=-=--=-=-=-=-= Rotas View -=-=-=--==--=-=-=-=-==-=---=-=

Route::view('/contato', 'contato', ['nome'=>'Cu sujo']);


*/





/* 

-=-=-=-=-=-=--=-= Redirecionamento -=-=-=-=-=-=-=-=

 Route::redirect('/daqui', '/praca', 301) ;

 Route::permanentRedirect('/daqui', 'praca');

*/












// ---------------------------
// VÁRIOS VERBOS NA MESMA ROTA
// ---------------------------

// Route::match(['get', 'post'], '/', function(){
//     return 'Algo';

// });


// Route::any('/', function(){
//     return 'coisas' ;

// });