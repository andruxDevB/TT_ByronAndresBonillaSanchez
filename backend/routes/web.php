<?php

use App\Http\Controllers\CabinController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CruiseController;
use App\Http\Controllers\DomesticFlightController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\InternationalFlightController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/login');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::resources([
        'programs' => ProgramController::class,
        'clients' => ClientController::class,
        'guides' => GuideController::class,
        'drivers' => DriverController::class,
        'hotels' => HotelController::class,
        'cruises' => CruiseController::class,
        'restaurants' => RestaurantController::class,
        'cabins' => CabinController::class,
        'rooms' => RoomController::class,
        'international_flights' => InternationalFlightController::class,
        'domestic_flights' => DomesticFlightController::class,
    ]);
});
