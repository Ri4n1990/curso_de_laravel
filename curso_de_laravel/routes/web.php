<?php

use Illuminate\Support\Facades\Route;
use Pest\Support\View;

Route::get('/', function(){
    return 'Olá' ;
});

















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