<?php

namespace App\Exceptions;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $error) {
        Log::debug($error->getMessage());

        if ($error instanceof ValidationException) {
            return response()->json([
                'errors'=>$error->validator->errors()
            ],  422);
        }
        
        if ($error instanceof AppError) {
            return response()->json([
                'errors'=>$error->getMessage()
            ],  $error->getCode());
        }

        if ($error instanceof AuthorizationException) {
            return response()->json([
                'errors'=>$error->getMessage()
            ], 403);
        }

        if ($error instanceof NotFoundHttpException) {
            return response()->json([
                'errors'=> 'route not found'
            ], 404);
        }

        return response()->json([
            'message' => 'Internal server error!'
        ], 500);
    }
}
