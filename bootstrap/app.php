<?php

use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Spatie\Permission\Exceptions\UnauthorizedException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'role' => \Spatie\Permission\Middleware\RoleMiddleware::class,
            'permission' => \Spatie\Permission\Middleware\PermissionMiddleware::class,
            'role_or_permission' => \Spatie\Permission\Middleware\RoleOrPermissionMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        // Tangani AuthenticationException (dari middleware auth)
        $exceptions->render(function (AuthenticationException $e, $request) {
            if ($request->expectsJson() || $request->isXmlHttpRequest()) {
                return response()->json([
                    'success' => false,
                    'title' => 'Anda Belum Login',
                    'message' => 'silakan login terlebih dahulu',
                    'redirect' => route('login')
                ], 401);
            }

            return redirect()->guest(route('login'));
        });

        // Tangani UnauthorizedException (dari Spatie role middleware)
        $exceptions->render(function (UnauthorizedException $e, $request) {
            if ($request->expectsJson() || $request->isXmlHttpRequest()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Anda tidak memiliki akses untuk tindakan ini',
                    'redirect' => route('front.index')
                ], 403);
            }

            return redirect()->route('front.index')->with('error', 'Akses ditolak');
        });
    })->create();
