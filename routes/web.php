<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\SalaryController;

Route::get('/', [EmployeeController::class, 'index'])->name('employees.index');
Route::resource('employees', EmployeeController::class);
Route::resource('salary', SalaryController::class);