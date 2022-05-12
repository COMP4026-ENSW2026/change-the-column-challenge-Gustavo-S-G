<?php

use App\Http\Controllers\WEB\PetsController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WEB\UsersController;

Route::get('/login', [WelcomeController::class, 'index']);

Route::resource('pets', PetsController::class);

Route::get('/users', [UsersController::class]);

Route::resource('users', UsersController::class);

// Route::get('/', function () {
//     return view('');
// });

// Route::get('/pets', [PetsController::class, 'index']);

// Route::post('/pets', [PetsController::class, 'store']);

// Route::get('/pets/adicionar', [PetsController::class, 'create']);

// Route::get('/pets/{id}', [PetsController::class, 'show']);
