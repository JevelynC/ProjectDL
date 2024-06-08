<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ModuleController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', [ModuleController::class, 'module'])->name('user.module');
Route::get('/exercise1', [ModuleController::class, 'exercise1'])->name('exercise1');
Route::get('/exercise2', [ModuleController::class, 'exercise2'])->name('exercise2');
Route::get('/exercise3', [ModuleController::class, 'exercise3'])->name('exercise3');
Route::get('/exercise4', [ModuleController::class, 'exercise4'])->name('exercise4');
Route::post('/check1', [ModuleController::class, 'check1'])->name('check1');
