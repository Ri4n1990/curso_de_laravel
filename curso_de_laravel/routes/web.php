<?php

use Illuminate\Support\Facades\Route;

require __DIR__ . '/clientes.php';

Route::get('/', function () {
    return view('contato');
});
