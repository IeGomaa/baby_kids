<?php

use App\Http\Controllers\Admin\AdminActivityController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminCourseController;
use App\Http\Controllers\Admin\AdminQuestionController;
use App\Http\Controllers\Admin\AdminSliderController;
use App\Http\Controllers\Admin\AdminTeacherController;
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

Route::get('/', function () {
    return view('EndUser/index');
});

Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'loginData'])->name('admin.loginData');

// Admin Routes
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

    // question Routes
    Route::group(['prefix' => 'question', 'as' => 'question.'],function () {
        Route::get('/', [AdminQuestionController::class, 'index'])->name('index');
        Route::get('/create', [AdminQuestionController::class, 'create'])->name('create');
        Route::post('/insert', [AdminQuestionController::class, 'insert'])->name('insert');
        Route::delete('/delete', [AdminQuestionController::class, 'delete'])->name('delete');
        Route::post('/update', [AdminQuestionController::class, 'update'])->name('update');
        Route::put('/edit', [AdminQuestionController::class, 'edit'])->name('edit');
    });

    // slider Routes
    Route::group(['prefix' => 'slider', 'as' => 'slider.'],function () {
        Route::get('/', [AdminSliderController::class, 'index'])->name('index');
        Route::get('/create', [AdminSliderController::class, 'create'])->name('create');
        Route::post('/insert', [AdminSliderController::class, 'insert'])->name('insert');
        Route::delete('/delete', [AdminSliderController::class, 'delete'])->name('delete');
        Route::post('/update', [AdminSliderController::class, 'update'])->name('update');
        Route::put('/edit', [AdminSliderController::class, 'edit'])->name('edit');
    });

    // activity Routes
    Route::group(['prefix' => 'activity', 'as' => 'activity.'],function () {
        Route::get('/', [AdminActivityController::class, 'index'])->name('index');
        Route::get('/create', [AdminActivityController::class, 'create'])->name('create');
        Route::post('/insert', [AdminActivityController::class, 'insert'])->name('insert');
        Route::delete('/delete', [AdminActivityController::class, 'delete'])->name('delete');
        Route::post('/update', [AdminActivityController::class, 'update'])->name('update');
        Route::put('/edit', [AdminActivityController::class, 'edit'])->name('edit');
    });

    // teacher Routes
    Route::group(['prefix' => 'teacher', 'as' => 'teacher.'],function () {
        Route::get('/', [AdminTeacherController::class, 'index'])->name('index');
        Route::get('/create', [AdminTeacherController::class, 'create'])->name('create');
        Route::post('/insert', [AdminTeacherController::class, 'insert'])->name('insert');
        Route::delete('/delete', [AdminTeacherController::class, 'delete'])->name('delete');
        Route::post('/update', [AdminTeacherController::class, 'update'])->name('update');
        Route::put('/edit', [AdminTeacherController::class, 'edit'])->name('edit');
    });

    // teacher Routes
    Route::group(['prefix' => 'course', 'as' => 'course.'],function () {
        Route::get('/', [AdminCourseController::class, 'index'])->name('index');
        Route::get('/create', [AdminCourseController::class, 'create'])->name('create');
        Route::post('/insert', [AdminCourseController::class, 'insert'])->name('insert');
        Route::delete('/delete', [AdminCourseController::class, 'delete'])->name('delete');
        Route::post('/update', [AdminCourseController::class, 'update'])->name('update');
        Route::put('/edit', [AdminCourseController::class, 'edit'])->name('edit');
    });


});

