<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('todos', [TodoController::class, 'index']);
Route::post('store-todo', [TodoController::class, 'store']);
Route::post('delete-todo', [TodoController::class, 'delete']);
Route::post('todo/mark-as-done', [TodoController::class, 'markAsDone']);
Route::post('todo/mark-as-undone', [TodoController::class, 'markAsUnDone']);