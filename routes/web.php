<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskModelController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/taskdisplay', [TaskModelController::class, 'index'])->name('taskdisplay');
Route::get('/create', [TaskModelController::class, 'create']);
Route::post('/taskstore', [TaskModelController::class, 'store']);
Route::get('/edit/{id}', [TaskModelController::class, 'edit']);
// Route::put('/update/{id}', [TaskModelController::class, 'update']);
// Route::delete('/delete/{id}', [TaskModelController::class, 'delete']);
Route::post('/update/{id}', [TaskModelController::class, 'update']);
Route::post('/delete/{id}', [TaskModelController::class, 'delete']);

