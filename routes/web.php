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

Route::get('login', [App\Http\Controllers\StudentAuthenticateController::class, 'showLoginForm'])->name('login');

Route::get('personal-information-registration', [App\Http\Controllers\PageController::class, 'personalInfoRegistration'])->name('personalInfo.create');

Route::prefix('student')->group(function () {
    Route::get('grade-report', [App\Http\Controllers\PageController::class, 'gradeReport'])->name('grade.report');
    Route::get('assessment-result', [App\Http\Controllers\PageController::class, 'assessmentResult'])->name('assessment.result');
    Route::get('mother-information', [App\Http\Controllers\PageController::class, 'motherInformation'])->name('mother.information');
    Route::get('education-information', [App\Http\Controllers\PageController::class, 'educationInformation'])->name('education.information');
});

Route::get('admin/dashboard', [App\Http\Controllers\PageController::class, 'adminDashboard'])->name('admin.dashboard');
Route::get('home', [App\Http\Controllers\PageController::class, 'home'])->name('home');
Route::get('/', [App\Http\Controllers\PageController::class, 'dashboard'])->name('dashboard');
Route::get('staff-dashboard', [App\Http\Controllers\PageController::class, 'dashboard'])->name('dashboard');
Route::get('staff/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('staff.login');

Route::get('student-dashboard', [App\Http\Controllers\StudentPageController::class, 'dashboard'])->name('student-dashboard');

Route::get('student-register', [App\Http\Controllers\Auth\RegisterStudentController::class, 'showRegistrationForm'])->name('student.register');
Route::post('student-register', [App\Http\Controllers\Auth\RegisterStudentController::class, 'register'])->name('student.register.submit');

Route::get('student-login', [App\Http\Controllers\StudentAuthenticateController::class, 'showLoginForm'])->name('student-login');
Route::post('student-login', [App\Http\Controllers\StudentAuthenticateController::class, 'login'])->name('student.login.submit');
Route::post('student/logout', [App\Http\Controllers\StudentAuthenticateController::class, 'logout'])->name('student.logout');


//New student info routes
Route::get('my-section', [App\Http\Controllers\PageController::class, 'mySection'])->name('mySection');
Route::get('my-dormitory', [App\Http\Controllers\PageController::class, 'myDormitory'])->name('myDormitory');
Route::get('registration-orientation', [App\Http\Controllers\PageController::class, 'registrationOrientation'])->name('registrationOrientation');
