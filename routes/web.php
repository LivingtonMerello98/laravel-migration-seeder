<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\TrainController;
use App\Http\Controllers\NextDepartures;

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


Route::get('/', [TrainController::class, 'index'])->name('departures.today');

//prossime partenze
Route::get('/next-departures', [NextDepartures::class, 'index'])->name('next.departures');

//dettagli treni
Route::get('/trains/{id}', [TrainController::class, 'show'])->name('train.details');
