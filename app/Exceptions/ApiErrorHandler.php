<?php

namespace App\Exceptions;

use Illuminate\Validation\ValidationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Throwable;

class ApiErrorHandler
{
    public static function handle(Throwable $e)
    {
        if ($e instanceof ValidationException) {
            return response()->json(['error' => $e->errors()], 422);
        }

        if ($e instanceof ModelNotFoundException) {
            return response()->json(['error' => 'Recurso no encontrado'], 404);
        }

        return response()->json(['error' => 'Error interno del servidor'], 500);
    }
}
