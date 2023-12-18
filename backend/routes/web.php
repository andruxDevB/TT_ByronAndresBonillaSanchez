<?php

use App\Http\Controllers\GuideController;
use App\Http\Controllers\ProgramController;
use App\Models\Program;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

/* Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard'); */

Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified',])->group(function () {
    /* Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/programs', [ProgramController::class,'index']);
    Route::get('/programs/{id}', [ProgramController::class, 'show']); */

    Route::resources([
        'programs' => ProgramController::class,
        'guides' => GuideController::class,
        /* 'clients' => ClientController::class,
        'drivers' => DriverController::class,
        'hotels' => HotelController::class,
        'cruises' => CruiseController::class,
        'international_flights' => InternationalFlightsController::class,
        'domestic_flights' => DomesticFlightsController::class,
        'cabins' => CabinController::class,
        'rooms' => RoomController::class, */
    ]);
});
