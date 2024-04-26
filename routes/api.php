<?php

use App\Http\Controllers\TypesOfVehiclesApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/type-of-vehicles',[TypesOfVehiclesApiController::class, 'index']);
Route::get('/type-of-vehicles/{id}',[TypesOfVehiclesApiController::class, 'show']);
Route::put('/type-of-vehicles/{id}',[TypesOfVehiclesApiController::class, 'update']);
Route::delete('/type-of-vehicles/{id}',[TypesOfVehiclesApiController::class, 'destroy']);


