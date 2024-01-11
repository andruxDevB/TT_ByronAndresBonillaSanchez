<?php

use App\Http\Controllers\API\CruiseController;
use App\Http\Controllers\API\DriverController;
use App\Http\Controllers\API\GuideController;
use App\Http\Controllers\API\HotelController;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\RestaurantController;
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

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::controller(RegisterController::class)->group(function(){
    Route::post('/auth/register', 'register');
    Route::post('/auth/login', 'login');
});

Route::middleware('auth:sanctum')->group(function(){
    Route::resource('guides', GuideController::class);
    Route::resource('drivers', DriverController::class);
    Route::resource('hotels', HotelController::class);
    Route::resource('cruises', CruiseController::class);
    Route::resource('restaurants', RestaurantController::class);
});