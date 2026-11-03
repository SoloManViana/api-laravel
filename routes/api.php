<?php

use App\Http\Controllers\CadastroCargoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/cargo', [CadastroCargoController::class, 'store']);