<?php

use App\Http\Controllers\TaskController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [TaskController::class,'index']);
// //Route::get('/tasks/create', 'TaskController@create')->name('tasks.create');
// Route::get('/tasks/create', [TaskController::class,'create']);
// //Route::post('/tasks', [TaskController::class,'store']);
// Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');

// Route::delete('/tasks/{task}', [TaskController::class,'destroy']);

Route::get('/', [TaskController::class, 'index']);
//Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');

Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');
Route::get('/tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
Route::post('/tasks/{task}', [TaskController::class, 'update'])->name('tasks.update');

