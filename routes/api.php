<?php

use App\Http\Controllers\TodoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use APP\Models\Todo;

Route::get('/todos', [TodoController::class, 'index']);
Route::post('/todos/create', [TodoController::class, 'store']);
Route::delete('/todos/delete/{todo}', [TodoController::class, 'destroy']);
// Route::get('/todos/{todo}', [TodoController::class, 'show'])->name('todos.show');
