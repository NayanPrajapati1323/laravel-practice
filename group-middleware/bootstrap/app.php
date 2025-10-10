<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\Agecheck;
use App\Http\Middleware\CountryCheck;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        // we can use as an group middleware
        // $middleware->appendToGroup('group1',[
        //     AgeCheck::class,
        //     CountryCheck::class
        // ]);
        //we can use as an group and single middleware
        $middleware->alias([
            'agecheckd' => AgeCheck::class,
            'countrycheck' => CountryCheck::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
