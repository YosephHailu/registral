<?php

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

Auth::routes();

Route::get('/', [App\Http\Controllers\PageController::class, 'dashboard'])->name('dashboard');
Route::get('/staff-dashboard', [App\Http\Controllers\PageController::class, 'dashboard'])->name('dashboard');
Route::get('/staff/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('staff.login');

Route::get('/student-dashboard', [App\Http\Controllers\StudentPageController::class, 'dashboard'])->name('student-dashboard');


Route::get('/student-register', [App\Http\Controllers\Auth\RegisterStudentController::class, 'showRegistrationForm'])->name('student.register');
Route::post('/student-register', [App\Http\Controllers\Auth\RegisterStudentController::class, 'register'])->name('student.register.submit');

Route::get('/student-login', [App\Http\Controllers\StudentAuthenticateController::class, 'showLoginForm'])->name('student-login');
Route::post('/student-login', [App\Http\Controllers\StudentAuthenticateController::class, 'login'])->name('student.login.submit');
Route::post('/student/logout', [App\Http\Controllers\StudentAuthenticateController::class, 'logout'])->name('student.logout');
