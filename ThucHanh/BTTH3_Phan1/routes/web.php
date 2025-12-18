<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\IssueController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('classes')->group(function () {
    Route::get('/', [ClassController::class, 'index'])->name('classes.index');
    Route::get('/create', [ClassController::class, 'create'])->name('classes.create');
    Route::post('/', [ClassController::class, 'store'])->name('classes.store');
    Route::get('/{id}/edit', [ClassController::class, 'edit'])->name('classes.edit');
    Route::post('/{id}', [ClassController::class, 'update'])->name('classes.update');
    Route::delete('/{id}', [ClassController::class, 'destroy'])->name('classes.destroy');
});

Route::prefix('students')->group(function () {
    Route::get('/', [StudentController::class, 'index'])->name('students.index');
    Route::get('/create', [StudentController::class, 'create'])->name('students.create');
    Route::post('/store', [StudentController::class, 'store'])->name('students.store');
    Route::get('/edit/{id}', [StudentController::class, 'edit'])->name('students.edit');
    Route::post('/update/{id}', [StudentController::class, 'update'])->name('students.update');
    Route::delete('/destroy/{id}', [StudentController::class, 'destroy'])->name('students.destroy');
});

Route::prefix('computers')->group(function () {
    Route::get('/', [ComputerController::class, 'index'])->name('computers.index');
    Route::get('/create', [ComputerController::class, 'create'])->name('computers.create');
    Route::post('/store', [ComputerController::class, 'store'])->name('computers.store');
    Route::get('/edit/{id}', [ComputerController::class, 'edit'])->name('computers.edit');
    Route::post('/update/{id}', [ComputerController::class, 'update'])->name('computers.update');
    Route::delete('/destroy/{id}', [ComputerController::class, 'destroy'])->name('computers.destroy');
});

Route::prefix('issues')->group(function () {
    Route::get('/', [IssueController::class, 'index'])->name('issues.index');
    Route::get('/create', [IssueController::class, 'create'])->name('issues.create');
    Route::post('/store', [IssueController::class, 'store'])->name('issues.store');
    Route::get('/edit/{id}', [IssueController::class, 'edit'])->name('issues.edit');
    Route::post('/update/{id}', [IssueController::class, 'update'])->name('issues.update');
    Route::delete('/destroy/{id}', [IssueController::class, 'destroy'])->name('issues.destroy');
});


Route::get('/medicines', [MedicineController::class, "index"]);

Route::get('/sales', [SaleController::class, "index"]);
