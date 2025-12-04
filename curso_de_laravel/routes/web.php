<?php

use Illuminate\Support\Facades\Route;
use Pest\Support\View;

Route::get('/', function(){
    return 'Olá' ;
});


Route::get('/praca', function(){
    return 'oi';
});










/* 

Rotas View

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