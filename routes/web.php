<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Dashboard\ProfileController;
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

// Auth::routes();
Route::get('/', function () {
    return view('frontend.pages.choose-portal');
})->name('choose-portal');
// Guest Routes hh

    //User Login Authentication Routes
    Route::get('student/login', [AuthController::class, 'studentLogin'])->name('student.login');
    Route::get('teacher/login', [AuthController::class, 'teacherLogin'])->name('teacher.login');
    Route::post('student/login-attempt', [AuthController::class, 'student_login_attempt'])->name('student.login.attempt');
    Route::post('teacher/login-attempt', [AuthController::class, 'teacher_login_attempt'])->name('teacher.login.attempt');

    //User Register Authentication Routes
    Route::get('student/register', [AuthController::class, 'studentRegister'])->name('student.register');
    Route::get('teacher/register', [AuthController::class, 'teacherRegister'])->name('teacher.register');
    Route::post('student/register-attempt', [AuthController::class, 'student_register_attempt'])->name('student.register.attempt');
    Route::post('teacher/register-attempt', [AuthController::class, 'teacher_register_attempt'])->name('teacher.register.attempt');

    //Student Portal Routes
    Route::prefix('student')->name('student.')->group(function () {
        Route::get('/', [StudentController::class, 'studentPortal'])->name('portal');
        Route::get('/videos', [StudentController::class, 'studentVideos'])->name('videos');
        Route::get('/audios', [StudentController::class, 'studentAudios'])->name('audios');
        Route::get('/animations', [StudentController::class, 'studentAnimations'])->name('animations');
        Route::get('/animations/{class}/{chapter}', [StudentController::class, 'chapterDetails'])->name('animations.chapter');
        Route::get('/animations/preview', [StudentController::class, 'preview'])->name('animation.preview');
        Route::get('/uraan-urdu-series', [StudentController::class, 'uraanUrduSeries'])->name('uraan-urdu-series');
        Route::get('/uraan-urdu-series/{class}/{chapter}', [StudentController::class, 'urduChapterDetails'])->name('uraan-urdu-series.chapter');
        Route::get('/uraan-urdu-preview', [StudentController::class, 'urduPreview'])->name('uraan-urdu.preview');
        Route::get('/uraan-urdu-series-resources', function () {
            return view('dashboard.students.urdu-resources');
        })->name('urdu-resources');
        Route::get('/uraan-urdu-series-nocs', function () {
            return view('dashboard.students.uraan-urdu-noc');
        })->name('urdu-nocs');

    });

// Authentication Routes

Route::group(['middleware' => ['auth']], function () {
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::post('profile/update', [ProfileController::class, 'update'])->name('profile.update');


    //Teacher Portal Routes
     Route::prefix('teacher')->name('teacher.')->group(function () {
        Route::get('/', [TeacherController::class, 'teacherPortal'])->name('portal');
        Route::get('/answer-kit', [TeacherController::class, 'teacherAnswerKit'])->name('answer-kit');
        Route::get('/resource-kit', [TeacherController::class, 'teacherResourceKit'])->name('resource-kit');
    });
});
