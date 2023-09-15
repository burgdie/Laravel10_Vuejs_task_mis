<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class, 'dashboard']);

Route::get('departments/index', [DepartmentController::class, 'index'])->name('departmentsIndex');
Route::get('departments/create', [DepartmentController::class, 'create'])->name('departmentsCreate');
Route::post('departments/store', [DepartmentController::class, 'store'])->name('departmentsStore');

Route::get('users/index', [UserController::class, 'index'])->name('usersIndex');
