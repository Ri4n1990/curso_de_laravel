<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('welcome') ;
});



// ---------------------------
// VÁRIOS VERBOS NA MESMA ROTA
// ---------------------------

// Route::match(['get', 'post'], '/', function(){
//     return 'Algo';

// });


// Route::any('/', function(){
//     return 'coisas' ;

// });