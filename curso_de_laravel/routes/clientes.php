<?php 

use Illuminate\Support\Facades\Route;


Route::get('/usuarios', function(){
    return view('clientes');
})->name('usuarios');


Route::get('/posts/{id}', function($id){
    echo "Id: $id ";
})->where('id','\d{3}')->name('posts');


Route::get('/acesso', function(){

    return redirect()->route('clientes.usuarios');

});