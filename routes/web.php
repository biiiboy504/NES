<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/lopgin',[MainController::class,'login'])->name('nes.login');
Route::get('/register',[MainController::class,'register'])->name('nes.register');
Route::post('/save',[MainController::class,'save'])->name('nes.save');
Route::post('/check',[MainController::class,'check'])->name('nes.check');
Route::get('/logout',[MainController::class,'logout'])->name('nes.logout');

Route::get('/dashboard',[MainController::class,'dashboard'])->name('dashboard');
Route::get('/studentlist',[MainController::class,'studentlist'])->name('studentlist');
Route::get('/courses',[MainController::class,'courses'])->name('courses');
Route::get('/session',[MainController::class,'session'])->name('session');
Route::get('/userlist',[MainController::class,'userlist'])->name('userlist');
Route::get('/logs',[MainController::class,'logs'])->name('logs');

