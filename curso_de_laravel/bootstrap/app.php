
<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Verificacao;
use App\Http\Middleware\Auth;


return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        then: function(){
            Route::middleware('web')
            ->prefix('clientes')
            ->name('clientes.')
            ->group(base_path('routes/clientes.php'));
            
        },
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
            'Verificacao' => Verificacao::class,
            
        ]);
    })

    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
