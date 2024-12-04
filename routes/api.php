<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Lightit\Backoffice\Users\App\Controllers\DeleteUserController;
use Lightit\Backoffice\Users\App\Controllers\GetUserController;
use Lightit\Backoffice\Users\App\Controllers\ListUserController;
use Lightit\Backoffice\Users\App\Controllers\StoreUserController;
use Lightit\Cities\App\Controllers\City\ListCityController;
use Lightit\Cities\App\Controllers\City\UpdateCityController;
use Lightit\Cities\App\Controllers\City\DeleteCityController;
use Lightit\Cities\App\Controllers\Airline\UpdateAirlineController;
use Lightit\Cities\App\Controllers\Airline\ListAirlineController;
use Lightit\Cities\App\Controllers\Airline\StoreAirlineController;
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

/*
|--------------------------------------------------------------------------
| Users Routes
|--------------------------------------------------------------------------
*/
Route::prefix('users')
    ->middleware([])
    ->group(static function () {
        Route::get('/', ListUserController::class);
        Route::get('/{user}', GetUserController::class)->withTrashed();
        Route::post('/', StoreUserController::class);
        Route::delete('/{user}', DeleteUserController::class);
    });

/*
|--------------------------------------------------------------------------
| Cities Routes
|--------------------------------------------------------------------------
*/
Route::prefix('cities')
    ->middleware([])
    ->group(static function () {
        Route::get('/', ListCityController::class);
        Route::put('/{city}', UpdateCityController::class);
        Route::delete('/{city}', DeleteCityController::class);
    });

/*
|--------------------------------------------------------------------------
| Airlines Routes
|--------------------------------------------------------------------------
*/
Route::prefix('airlines')
    ->middleware([])
    ->group(static function () {
        Route::get('/', ListAirlineController::class);
        Route::post('/', StoreAirlineController::class);
        Route::put('/{airline}', UpdateAirlineController::class);
        // Route::delete('/{airline}', DeleteAirlineController::class);
    });
