<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeDashboardController;
use App\Http\Controllers\UserController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
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
//     return view('welcome');
// });

Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
// Route::get('/homedashboard', [HomeDashboardController::class, 'homedashboard'])->name('homedashboard');
// Route::resource('home', HomeDashboardController::class);

Route::get('role', [UserController::class, 'role'])->name('role');

Route::get('role-create-form', [UserController::class, 'form'])->name('role.create.form');
Route::post('role-store-form', [UserController::class, 'store'])->name('role.store.form');

Route::get('user', [UserController::class, 'user'])->name('user');


