<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/create', function () {
//     return view('create');
// });

// Route::get('/edit', function () {
//     return view('edit');
// });

Route::get('/index',[TodoController::class,'index'])->name('todo.index');

Route::get('/create',[TodoController::class,'create'])->name('todo.create');

// Route::get('/edit',[TodoController::class,'edit'])->name('todo.edit');

Route::post('/store',[TodoController::class,'store'])->name('todo.store');

Route::get('/edit/{id}',[TodoController::class,'edit'])->name('todo.edit');

Route::post('/update/{id}',[TodoController::class,'update'])->name('todo.update');

Route::get('/delete/{id}',[TodoController::class,'delete'])->name('todo.delete');