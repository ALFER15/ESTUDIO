<?php

use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

});

Route::get('/user-index', [userController::class, 'index'])->name('user-index');
Route::post('/user-index', [userController::class, 'store'])->name('user-store');
Route::get('/user-create', [userController::class, 'create'])->name('user-create');
Route::get('/user-show/{userPractica}', [userController::class, 'show'])->name('user-show');
