<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ScholarsController;
use App\Http\Controllers\StudentsController;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/scholars', [ScholarsController::class, 'index'])->name('admin.scholars');
    Route::get('/scholars/{id}', [StudentsController::class, 'show'])->name('view-scholar');
    Route::get('/add-scholars', [StudentsController::class, 'index'])->name('admin.add-scholar');
    Route::post('/add-scholars', [StudentsController::class, 'store'])->name('admin.store-scholar');
});

require __DIR__.'/auth.php';
