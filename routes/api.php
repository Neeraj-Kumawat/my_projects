<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ExampleController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/example', [ExampleController::class, 'storemyapi']);
//   Route::delete('/delete/{id}', [ExampleController::class, 'destroy']);