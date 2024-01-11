<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ScholarsController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\ScholarshipController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\DownloadController;
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
    Route::get('/SAGAP', [ScholarshipController::class, 'sagap'])->name('sagap');
    Route::get('/Sunlife', [ScholarshipController::class, 'sunlife'])->name('sunlife');
    Route::get('/SM', [ScholarshipController::class, 'sm'])->name('sm');
    Route::get('/CHED', [ScholarshipController::class, 'ched'])->name('ched');
    Route::get('/TES', [ScholarshipController::class, 'tes'])->name('tes');
    Route::get('/TESDA', [ScholarshipController::class, 'tesda'])->name('tesda');
    Route::put('/students/{student}', [StudentsController::class, 'update'])->name('students.update');
    Route::get('/Scholars/Verified', [ScholarsController::class, 'verifiedScholars'])->name('verified.scholars');
    Route::get('/Scholars/Unverified', [ScholarsController::class, 'unverifiedScholars'])->name('unverified.scholars');
    Route::get('/Scholars/Graduated', [ScholarsController::class, 'graduatedScholars'])->name('graduated.scholars');
    Route::get('/scholarship/fsuu_funded', [ScholarshipController::class, 'fsuuFunded'])->name('fsuu-funded');
    Route::get('/scholarship/private_funded', [ScholarshipController::class, 'privateFunded'])->name('private-funded');
    Route::get('/scholarship/government_funded', [ScholarshipController::class, 'govtFunded'])->name('govt-funded');
    Route::get('/history/{id}', [StudentsController::class, 'showHistory'])->name('history');


    
    Route::get('/activity-logs', [StudentsController::class, 'activityLog'])->name('activity-logs');
    // Route::post('/import', [StudentsController::class, 'import'])->name('import');
    // Route::get('/generate-pdf', [PDFController::class, 'generatePrintable'])->name('students.pdf');
    

});

require __DIR__.'/auth.php';
