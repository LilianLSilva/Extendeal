<?php

namespace Modules\Cuadro\Exceptions;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->rederable(function (ModelNotFoundException $e, $request){
            return response()->json(["res" => false, "error" => "Error de modelo"], 400);
        });

        $this->rederable(function (HttpException $e, $request){
            return response()->json(["res" => false, "error" => "Error en la ruta"], 404);
        });

        $this->rederable(function (QueryException $e, $request){
            return response()->json(["res" => false, "error" => "Error de consulta BDD"], 500);
        });

        $this->rederable(function (AuthenticationException $e, $request){
            return response()->json(["res" => false, "error" => "Error de autenticación"], 401);
        });

        $this->rederable(function (AuthorizationException $e, $request){
            return response()->json(["res" => false, "error" => "Error de autorización, no tiene permisos"], 403);
        });

        $this->rederable(function (RouteNotFoundException $e, $request){
            return response()->json(["res" => false, "error" => "Error en la ruta"], 404);
        });

    }

}
