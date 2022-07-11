<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;




Route::get('/posts',[PostController::class,'index'])->name('posts.index');
Route::get('/users/{id}/posts',[PostController::class, 'show'])->name('posts.show');
Route::delete('/users/{id}/delete',[UserController::class, 'destroy'])->name('users.destroy');
Route::put('/users/{id}',[UserController::class,'update'])->name('users.update');
Route::get('/users/{id}/edit',[UserController::class,'edit'])->name('users.edit');
Route::get('/users/create',[UserController::class,'create'])->name('users.create');
Route::post('/user',[UserController::class,'store'])->name('users.store');
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');


