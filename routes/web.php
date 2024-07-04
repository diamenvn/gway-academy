<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\LeadershipController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\ServiceController;
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

Route::resource('/', AppController::class);
// Route::resource('/course', CourseController::class);
Route::get('/course/general-information', [CourseController::class, 'generalInformation'])->name('course/general-information');
Route::get('/course/lesson-information', [CourseController::class, 'lessonInformation'])->name('course/lesson-information');
Route::get('/course/rating', [CourseController::class, 'rating'])->name('course/rating');

Route::resource('/posts', PostController::class);
Route::resource('/about-us', AboutusController::class);
Route::resource('/leadership', LeadershipController::class);
Route::resource('/contact-us', ContactusController::class);
Route::resource('/service', ServiceController::class);