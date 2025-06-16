<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('rooms', RoomController::class);
Route::get('/dashboard', [RoomController::class, 'dashboard'])->name('dashboard');
Route::get('/room/{slug}', [RoomController::class, 'show'])->name('room.details');
Route::get('/room/{slug}/edit', [RoomController::class, 'edit'])->name('room.edit');
Route::put('/room/{slug}/update', [RoomController::class, 'update'])->name('room.update');


Route::resource('users', UserController::class);

require __DIR__.'/auth.php';
