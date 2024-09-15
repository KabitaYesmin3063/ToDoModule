<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/Route::get('/', function () {
    return view('home');
});


Route::resource('todos', TodoController::class);


Route::get('/todos', [ToDoController::class, 'index'])->name('todos.index');
Route::get('/todos/create', [ToDoController::class, 'create'])->name('todos.create');  // Route for showing the create form
Route::post('/todos', [ToDoController::class, 'store'])->name('todos.store');
Route::get('/todos/{id}/edit', [ToDoController::class, 'edit'])->name('todos.edit');
Route::put('/todos/{id}', [ToDoController::class, 'update'])->name('todos.update');
Route::delete('/todos/{id}', [ToDoController::class, 'destroy'])->name('todos.destroy');

