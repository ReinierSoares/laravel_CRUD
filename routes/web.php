<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SattelitesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('/satellites');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::prefix('/')->group(function () {
    Route::get('/', [SattelitesController::class, 'index'])->name('satellites-index');
    Route::get('/create', [SattelitesController::class, 'create'])->name('satellites-create');
    Route::post('/', [SattelitesController::class, 'store'])->name('satellites-store');
    Route::get('/{id}/edit', [SattelitesController::class, 'edit'])->where('id', '[0-9]+')->name('satellites-edit');
    Route::put('/{id}', [SattelitesController::class, 'update'])->where('id', '[0-9]+')->name('satellites-update');
    Route::delete('/{id}', [SattelitesController::class, 'destroy'])->where('id', '[0-9]+')->name('satellites-destroy');
});

Route::fallback(function () {
    return 'Page not Found';
});

require __DIR__ . '/auth.php';
