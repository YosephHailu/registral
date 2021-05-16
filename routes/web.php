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
    Route::get('grade-report', [App\Http\Controllers\StudentController::class, 'gradeReport'])->name('grade.report');
    Route::get('assessment-result', [App\Http\Controllers\PageController::class, 'assessmentResult'])->name('assessment.result');
    Route::get('mother-information', [App\Http\Controllers\PageController::class, 'motherInformation'])->name('mother.information');
    Route::get('education-information', [App\Http\Controllers\PageController::class, 'educationInformation'])->name('education.information');
});

Route::prefix('courses')->group(function () {
    Route::get('/', [App\Http\Controllers\PageController::class, 'courses'])->name('courses');
    Route::get('add', [App\Http\Controllers\PageController::class, 'addCourse'])->name('add-course');
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


//Department routes
Route::resource('department', App\Http\Controllers\DepartmentController::class, ['names' => "department"]);

//Stream routes
Route::resource('stream', App\Http\Controllers\StreamController::class, ['names' => "stream"]);

//Academic year
Route::resource('academic-year', App\Http\Controllers\AcademicYearController::class, ['names' => "academic.year"]);
Route::resource('semester', App\Http\Controllers\SemesterController::class, ['names' => "semester"]);
Route::resource('course', App\Http\Controllers\CourseController::class, ['names' => "course"]);
Route::get('stream-course/{stream}', [App\Http\Controllers\StreamCourseController::class, 'create'])->name('stream.course');
Route::resource('stream-course', App\Http\Controllers\StreamCourseController::class, ['names' => "stream.course"]);
Route::resource('course', App\Http\Controllers\CourseController::class, ['names' => "course"]);
Route::resource('registration-offering', App\Http\Controllers\RegistrationOfferingController::class, ['names' => "registration.offering"]);
Route::get(
    'change-registration-offering-status/{registrationOffering}',
    [App\Http\Controllers\RegistrationOfferingController::class, 'changeStatus']
)->name('change.registration.offering.status');
Route::resource('student', App\Http\Controllers\StudentController::class, ['names' => "student"]);
Route::get('student/{student}/{teacherSection}/manage-grade', [App\Http\Controllers\StudentController::class, 'manageGrade'])->name('manage.student.grade');

Route::post('change-student-status/{student}', [App\Http\Controllers\StudentController::class, 'changeStatus'])
    ->name('student.status.form');
Route::get('change-student-status/{student}', [App\Http\Controllers\StudentController::class, 'changeStatusForm'])
    ->name('change.student.status');
Route::get('deactivate-student/{student}', [App\Http\Controllers\StudentController::class, 'deactivateStudent'])
    ->name('deactivate.student');
Route::get('course-registration', [App\Http\Controllers\CourseRegistrationController::class, 'courseRegistrationForm'])
    ->name('course.registration');

Route::post('course-registration', [App\Http\Controllers\CourseRegistrationController::class, 'courseRegistration'])
    ->name('registration.course');

Route::resource('grade', App\Http\Controllers\GradeController::class, ['names' => "grade"]);
Route::resource('section', App\Http\Controllers\SectionController::class, ['names' => "section"]);
Route::get('get-sections', [App\Http\Controllers\SectionController::class, 'sections'])->name('sections');

Route::resource('student-course', App\Http\Controllers\StudentCourseController::class, ['names' => "student.course"]);
Route::resource('teacher-section', App\Http\Controllers\TeacherSectionController::class, ['names' => "teacher.section"]);

Route::get('my-sections', [App\Http\Controllers\TeacherSectionController::class, 'mySections'])->name('my.section');
Route::get('section/{teacherSection}/students', [App\Http\Controllers\TeacherSectionController::class, 'sectionStudents'])->name('section.student');

//Assessment routes
Route::resource('assessment', App\Http\Controllers\AssessmentController::class, ['names' => "assessment"]);
Route::get('assessment/{teacherSection}/create', [App\Http\Controllers\AssessmentController::class, 'create'])->name('assessment.create');

//Student assessments
Route::post('update-mark/{studentAssessment}', [App\Http\Controllers\StudentAssessmentController::class, 'updateMark'])->name('update-student-mark');


//Reports
Route::get('student-grade-report', [App\Http\Controllers\ReportController::class, 'studentGrade'])->name('student.grade.report');
