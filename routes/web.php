<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Dashboard\StudentController;
use App\Http\Controllers\Dashboard\TeacherController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();
Route::get('/', function () {
    return view('frontend.pages.choose-portal');
})->name('choose-portal');
// Guest Routes

    //User Login Authentication Routes
    Route::get('student/login', [AuthController::class, 'studentLogin'])->name('student.login');
    Route::get('teacher/login', [AuthController::class, 'teacherLogin'])->name('teacher.login');
    Route::post('student/login-attempt', [AuthController::class, 'student_login_attempt'])->name('student.login.attempt');


// Authentication Routes
Route::group(['middleware' => ['auth']], function () {
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    //Student Portal Routes
     Route::prefix('student')->name('student.')->group(function () {
        Route::get('/', [StudentController::class, 'studentPortal'])->name('portal');
        Route::get('/videos', [StudentController::class, 'studentVideos'])->name('videos');
        Route::get('/audios', [StudentController::class, 'studentAudios'])->name('audios');
    });

    //Teacher Portal Routes
     Route::prefix('teacher')->name('teacher.')->group(function () {
        Route::get('/', [TeacherController::class, 'teacherPortal'])->name('portal');
        Route::get('/answer-kit', [TeacherController::class, 'teacherAnswerKit'])->name('answer-kit');
        Route::get('/resource-kit', [TeacherController::class, 'teacherResourceKit'])->name('resource-kit');
    });
});
