<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Verificacao;
use App\Http\Middleware\Controle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Show ;
use App\Http\Controllers\Usuarios;
use App\Http\Controllers\Admins;
use App\Http\Controllers\Prat;
use App\Http\Middleware\Autenticacao;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Pest\Support\View;


Route::get('/', [Show::class , 'init'])->name('principal');

Route::get('/pg_clientes',function (){
    return view('clientes');
});

Route::get('/redireciona', [Usuarios::class,'redireciona'] );


Route::post('/test/lolo', [Show::class , 'requisicoes'])->name('test');

Route::post('/user', [Usuarios::class,'dados_cliente' ])->name('user');

Route::get('/cliente',  [Usuarios::class , 'dados']);

Route::get('/imagem', function(){
    $arq = storage_path();
    Log::debug($arq);
    return response()->download($arq);
});




Route::post('/usuario', function(Request $request){
    $nome = $request->input('nome') ;
    $idade = $request->input(('idade'));
    Log::debug([$nome, $idade]);

});






Route::post('/clis', function(Request $request){

    Log::debug('chegou');

    return "";
    

});


Route::view('/admins','administradores', ['nome' => 'pedro']);


Route::get('/dados_cliente',[Admins::class,'dados_cliente'])->name('dados_cliente');

Route::get('/diretivas', [Usuarios::class, 'nome_cliente']);

Route::get('/produtos',[Usuarios::class, 'produtos']);


Route::view('/layouts','herda');


Route::get('/cadastro', function(){
    return view('pagina_erro');
});

Route::post('/cadastro',[Prat::class ,'cadastro'])->name('cadastro');

Route::view('/exclusivo','pg_exclusiva')->name('pg_exclusiva')->middleware(Autenticacao::class);

Route::view('/registrar', 'registro');




// Route::get('/controle', function(){
//     return 'olá' ;
// })->middleware(Verificacao::class);


// Route::get('/teste', function(){
//     return 'Passei pelo midleware';
// });


















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