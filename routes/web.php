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
Route::post('/check2', [ModuleController::class, 'check2'])->name('check2');
Route::post('/check3', [ModuleController::class, 'check3'])->name('check3');
Route::post('/check4', [ModuleController::class, 'check4'])->name('check4');
Route::get('/module1', [ModuleController::class, 'module1'])->name('module1');
Route::get('/module2', [ModuleController::class, 'module2'])->name('module2');
Route::get('/module3', [ModuleController::class, 'module3'])->name('module3');
Route::get('/module4', [ModuleController::class, 'module4'])->name('module4');
