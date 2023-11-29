<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\TournamentController;
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
Route::get('/tournaments', [TournamentController::class, 'index']) -> name('tournaments.index');
Route::get('/tournaments/create', [TournamentController::class, 'create']) -> name('tournaments.create');
Route::post('/tournaments', [TournamentController::class, 'store']) -> name('tournaments.store');
Route::get('/tournaments/{tournaments}', [TournamentController::class, 'show']) -> name('tournaments.show');
Route::get('/tournaments/{tournaments}/edit', [TournamentController::class, 'edit']) -> name('tournaments.edit');
Route::put('/tournaments/{tournaments}', [TournamentController::class, 'update']) -> name('tournaments.update');


Route::delete('/tournaments/{tournaments}', [TournamentController::class, 'destroy']) -> name('tournaments.destroy');


