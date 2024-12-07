<?php

use App\Http\Controllers\CarsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::put('/dashboard/orders/{id}', [DashboardController::class, 'update'])->middleware(['auth', 'verified'])->name('orders.update');
Route::get("/car/{id}", [CarsController::class, 'GetCar']);
Route::get('/orders/{phone}', [OrderController::class, 'getOrders']);
Route::post('/submit-order', [CarsController::class, 'submitOrder']);
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
