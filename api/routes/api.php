<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PersonController;

Route::get('/v1/person', [PersonController::class, 'index']);
Route::get('/v1/person/{id}', [PersonController::class, 'show']);

Route::fallback(function () {
    return response()->json([
        'message' => 'Not Found'
    ], 404);
});