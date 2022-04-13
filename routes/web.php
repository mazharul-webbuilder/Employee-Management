<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route:: get('/', [MainController::class, 'index'])->name('home');
    Route:: get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route:: get('/add-new-employee', [EmployeeController::class, 'addEmployee'])->name('employee.add');
    Route:: post('/create-employee', [EmployeeController::class, 'create'])->name('employee.create');
    Route:: get('/all-employee', [EmployeeController::class, 'allEmploye'])->name('employee.list');
    Route:: get('/edit-employee/{id}', [EmployeeController::class, 'edit'])->name('employee.edit');
    Route:: post('/update-employee/{id}', [EmployeeController::class, 'update'])->name('employee.update');
    Route:: get('/delete-employee/{id}', [EmployeeController::class, 'delete'])->name('employee.delete');
});
