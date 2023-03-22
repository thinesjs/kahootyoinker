<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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

//routes
Route::get('/', [IndexController::class, 'index'])->name('/')->middleware('guest');

//session uuid routes
Route::get('game/{id}', [IndexController::class, 'getGameByUUID'])->name('getGame');
Route::post('game', [IndexController::class, 'getGameByUUID'])->name('getGame-post');
