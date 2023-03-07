<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [UserController::class, 'home'])->name('UserHome');
Route::get('/packages',[UserController::class, 'packages'])->name('UserPackages');
Route::get('/about', [UserController::class, 'about'])->name('UserAbout');
Route::get('/blogs', [UserController::class, 'blogs'])->name('UserBlogs');
Route::get('/contact', [UserController::class, 'contact'])->name('UserContact');
