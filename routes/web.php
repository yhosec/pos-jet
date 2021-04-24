<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');


Route::get('/pos', [\App\Http\Controllers\PosController::class, 'index'])
    ->name('pos.index');

Route::get('/items', [\App\Http\Controllers\Master\ItemsController::class, 'index'])
    ->name('master.items.index');
Route::get('/items/create', [\App\Http\Controllers\Master\ItemsController::class, 'formAdd'])
    ->name('master.items.form-add');
Route::post('/items/create', [\App\Http\Controllers\Master\ItemsController::class, 'doAdd'])
    ->name('master.items.do-add');
Route::get('/items/edit/{id}', [\App\Http\Controllers\Master\ItemsController::class, 'formEdit'])
    ->name('master.items.form-edit');
Route::post('/items/edit/{id}', [\App\Http\Controllers\Master\ItemsController::class, 'doEdit'])
    ->name('master.items.do-edit');
