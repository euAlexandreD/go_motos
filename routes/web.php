<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Middleware\CheckIsLoggec;

Route::middleware([CheckIsLoggec::class])->group(function(){
    Route::get('/newBike', [MainController::class, 'newBike'])->name('new');
    Route::post('/newBikeSubmit', [MainController::class, 'newBikeSubmit'])->name('newBikeSubmit');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/', [MainController::class, 'index'])->name('home');
Route::post('loginSubmit', [AuthController::class, 'loginSubmit']);
Route::get('/bikeDetails/{id}', [MainController::class, 'bikeDetails'])->name('bikeDetails');
Route::get('deleteBike/{id}', [MainController::class, 'deleteBike'])->name('deleteBike');
Route::get('deleteConfirm/{id}', [MainController::class, 'deleteConfirm'])->name('deleteConfirm');