<?php

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index'])->name('user.home');
Route::get('/module', [UserController::class, 'module'])->name('user.module');
