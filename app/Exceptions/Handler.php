<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
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
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $exception)
    {
        if ($exception instanceof NotFoundHttpException) {
            return response()->json([
                "status" => "Error has occurred...",
                "message" => "Route does not exit",
                "data" => "null"
            ], 404);
        }

        if ($exception instanceof MethodNotAllowedHttpException) {
            // Customize the response for MethodNotAllowedHttpException
            return response()->json([
                "status" => "Error has occurred...",
                "message" => "Wrong Request Method",
                "data" => "null"
            ], 404);
        }

        return parent::render($request, $exception);
    }
}
