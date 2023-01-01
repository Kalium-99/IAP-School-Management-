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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/studentattendance', [App\Http\Controllers\AttendanceController::class,'show']);
Route::get('/results', [App\Http\Controllers\ResultController::class,'show']);
Route::get('/units', [App\Http\Controllers\UnitController::class,'select']);
Route::get('/selfregistration', [App\Http\Controllers\UnitController::class,'show']);
Route::post('/addunit', [App\Http\Controllers\UnitController::class,'addunit']);
Route::get('/studentcoursework', [App\Http\Controllers\CourseController::class,'showCoursework']);
Route::get('/studentfees', function () {
    return view('studfees');
});
Route::get('/student', function () {
    return view('studashboard');
});

Route::get('/logout', function () {
    Session::forget('student');
    return redirect('/');
});

Route::get('/removeunit/{id}', [App\Http\Controllers\UnitController::class,'removeunit']);
Route::get('/worksubmission/{id}', [App\Http\Controllers\CourseController::class,'viewwork']);
Route::post('upload', [App\Http\Controllers\CourseController::class,'submitCoursework']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::get('list', [App\Http\Controllers\CourseController::class,'show']);