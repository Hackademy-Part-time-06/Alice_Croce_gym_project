<?php

use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'homepage'])->name('homepage');
Route::get('/contatti', [PageController::class, 'contatti'])->name('contatti');
Route::get('/corsi-disponibili', [PageController::class, 'corsidisponibili'])->name('corsi-disponibili');
Route::get('/dettagli-corso/{riferimento}', [PageController::class, 'dettaglicorso'])->name('dettagli-corso');
