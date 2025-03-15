<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Foundation\Configuration\Exceptions;
use App\Http\Middleware\PreventBackHistory;

$app = Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up'
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->validateCsrfTokens(except: [
           'git-pull'
        ]);
        $middleware->alias([
            'checkrole' => \App\Http\Middleware\CheckRole::class,
        ]);
    
        $middleware->append(\App\Http\Middleware\PreventBackHistory::class);
    })
    
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
;

return $app;
