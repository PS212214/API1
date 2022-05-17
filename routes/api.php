<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HoofdstukController;
use App\Http\Controllers\ScriptsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('scripts', ScriptsController::class);

//Route::apiResource('functies', FunctieController::class)->parameters(['functies' => 'functie']);
//Aleen genoemde methodes
Route::apiResource('hoofdstukken', HoofdstukController::class)->only(['index', 'show']);

// Route::apiResource('hoofdstukken/{id}/scripts', HoofdstukController::class);

Route::get('hoofdstukken/{id}/scripts', [HoofdstukController::class, 'indexFunctie']);

Route::delete('hoofdstukken/{id}/scripts', [HoofdstukController::class, 'destroyFunctie']);
