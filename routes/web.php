<?php
use App\Http\Controllers\MainController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/expense/', [ExpenseController::class, 'index'])->name('expense.index');
Route::get('/income/', [IncomeController::class, 'index'])->name('income.index');
Route::get('/report/', [ReportController::class, 'index'])->name('report.index');
