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

Route::get('/appointmentForm', function () {
    return view('appointmentForm');
});

Route::get('/addDoctors', function () {
    return view('addDoctors');
});

Route::post('/appointmentForm',[App\Http\Controllers\AppointmentController::class,'add'])->name('appointmentForm');

Route::get('/showPatient',[App\Http\Controllers\AppointmentController::class,'view'])->name('showPatient');

Route::post('/addDoctors/store',[App\Http\Controllers\DoctorsController::class,'add'])->name('addDoctors');

Route::get('/showDoctors',[App\Http\Controllers\DoctorsController::class,'view'])->name('showDoctors');

Route::get('/detailDoctors',[App\Http\Controllers\UserController::class,'view'])->name('detailDoctors');

Route::post('/detailDoctors', [App\Http\Controllers\UserController::class, 'searchDoctor'])->name('search.doctor');

Route::get('/deleteDoctors/{id}',[App\Http\Controllers\DoctorsController::class,'delete'])->name('deleteDoctors');

Route::get('editDoctors/{id}',[App\Http\Controllers\DoctorsController::class,'edit'])->name('editDoctors');

Route::get('editPatients/{id}',[App\Http\Controllers\AppointmentController::class,'edit'])->name('editPatients');

Route::post('/updatePatients', [App\Http\Controllers\AppointmentController::class, 'update'])->name('updatePatients');

Route::get('/deletePatients/{id}',[App\Http\Controllers\AppointmentController::class,'delete'])->name('deletePatients');

Route::post('/updateDoctors', [App\Http\Controllers\DoctorsController::class, 'update'])->name('updateDoctors');



Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
