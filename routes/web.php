<?php

use App\Http\Controllers\auth\AdminController;
use App\Http\Controllers\BenefitController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EarninControllr;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Fe\EmployeeController as FeEmployeeController;
use App\Http\Controllers\PersonalInformationController;
use App\Http\Controllers\VacationDayController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [AdminController::class, 'index'])->name('index');
Route::get('dashboard_employee',[FeEmployeeController::class,'index'])->name('dashboard_employee');
Route::get('register', [AdminController::class, 'register'])->name('register');
Route::post('postRegister', [AdminController::class, 'postRegister'])->name('postRegister');
Route::get('login', [AdminController::class, 'login'])->name('login');
Route::post('postLogin', [AdminController::class, 'postLogin'])->name('postLogin');
Route::get('logOut',[AdminController::class , 'logOut'])->name('logOut');
Route::resource('employees', EmployeeController::class);
Route::resource('earning', EarninControllr::class);
Route::resource('departments', DepartmentController::class);
Route::resource('vacation_days', VacationDayController::class);
Route::resource('benefits', BenefitController::class);


