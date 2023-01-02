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
Route::get('list', [CourseController::class,'show']);

//creating staff
Route::get('/staffapplication' , [App\Http\Controllers\StaffController::class, 'index']);
Route::post('/staffreg', [App\Http\Controllers\StaffController::class, 'store']);
Route::post('/staffapplication',  [App\Http\Controllers\StaffController::class, 'index'])->name('index');


Route::get('/admin', function() {
    return view('admin.admindashboard');
});
Route::get('/staff', function() {
    return view('staffdashboard');
});

//displaying all staff applicants
Route::get('/applicants', [App\Http\Controllers\StaffController::class, 'staffapplicants']);
Route::get('/staffaccepted', [App\Http\Controllers\StaffController::class, 'staffaccepted']);

//decline applicant application
Route::delete('/applicants/{applicant}',[App\Http\Controllers\StaffController::class, 'decline']);
//accept applicant application
Route::put('/applicants/{applicant}',[App\Http\Controllers\StaffController::class, 'accept']);

Route::get('/lecturers', [App\Http\Controllers\LecturerController::class, 'lecturers']);
Route::post('/lecturers/{lecturer}', [App\Http\Controllers\LecturerController::class, 'unitassignment']);

Route::get('/lecsOOP', [App\Http\Controllers\LecturerController::class, 'ooplecturers']);