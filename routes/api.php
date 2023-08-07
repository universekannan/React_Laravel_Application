<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Route::resource('/tasks', 'TaskController');
Route::get('/tasks', [App\Http\Controllers\TaskController::class, 'index'])->name('index');
Route::post('/tasks', [App\Http\Controllers\TaskController::class, 'store'])->name('store');
Route::get('/tasks/{id}', [App\Http\Controllers\TaskController::class, 'show'])->name('show');
Route::put('/tasks/{id}', [App\Http\Controllers\TaskController::class, 'update'])->name('update');
Route::delete('/tasks/{id}', [App\Http\Controllers\TaskController::class, 'destroy'])->name('destroy');

