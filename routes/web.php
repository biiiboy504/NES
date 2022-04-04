<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LogsController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\EducBackgroundController;

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

//User Authentication
Route::get('/login',[MainController::class,'login'])->name('nes.login');
Route::get('/register',[MainController::class,'register'])->name('nes.register');
Route::post('/save',[MainController::class,'save'])->name('nes.save');
Route::post('/check',[MainController::class,'check'])->name('nes.check');
Route::get('/logout',[MainController::class,'logout'])->name('nes.logout');
Route::get('/change-password', [MainController::class, 'changePassword'])->name('change-password');
Route::post('/change-password', [MainController::class, 'updatePassword'])->name('update-password');

//Links

// Route::get('/dashboard',[MainController::class,'dashboard'])->name('dashboard');
// Route::get('/studentlist',[StudentController::class,'index'])->name('studentlist');
// Route::get('/courses',[CourseController::class,'index'])->name('courses');
// Route::get('/session',[SessionController::class,'index'])->name('session');
// Route::get('/userlist',[MainController::class,'userlist'])->name('userlist');
// Route::get('/logs',[LogsController::class,'index'])->name('logs');

Route::get('/dashboard',[MainController::class, 'dashboard']);
Route::get('/userlist',[MainController::class, 'userlist']);
Route::resource('/studentlist','App\Http\Controllers\StudentController');
Route::resource('/courses','App\Http\Controllers\CourseController');
Route::resource('/session','App\Http\Controllers\SessionController');
Route::resource('/logs','App\Http\Controllers\LogsController');
