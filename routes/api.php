<?php

use App\Http\Controllers\PersonController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Adding a new person
Route::post('/', [PersonController::class, 'store']);

// Get the single user
Route::get('/{id}', [PersonController::class, 'single']);

// update the single user
Route::put('/{id}', [PersonController::class, 'update']);

// delete the single user
Route::delete('/{id}', [PersonController::class, 'delete']);
