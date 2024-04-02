<?php

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
    return view('form');
});

Route::post('/uczen', [\App\Http\Controllers\UczenController::class, 'store'])->name('uczen.store');
Route::get('/uczen/{id}', [\App\Http\Controllers\UczenController::class, 'index'])->name('uczen.data');
Route::get('/foto/{id}', [\App\Http\Controllers\UczenController::class, 'foto'])->name('uczen.foto')
    ->middleware(['auth']);
Route::get('storage/app/foto/{id}', [\App\Http\Controllers\UczenController::class, 'foto'])->name('uczen.foto1')
    ->middleware(['auth']);

Auth::routes(['login' => true, 'reset' => false, 'verify' => false,'register'=>false]);

