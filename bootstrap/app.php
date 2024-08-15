<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'jwt.auth' => \App\Http\Middleware\JWTMiddleware::class, //This is the JWT middleware
            'role' => \App\Http\Middleware\RoleMiddleware::class, //This middleware is for access control on some routes
        ]);
        
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
