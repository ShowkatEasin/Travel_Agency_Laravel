<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;


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

   /* User Route */

Route::get('/home', [UserController::class, 'home'])->name('UserHome');
Route::get('/packages',[UserController::class, 'packages'])->name('UserPackages');
Route::get('/about', [UserController::class, 'about'])->name('UserAbout');
Route::get('/blogs', [UserController::class, 'blogs'])->name('UserBlogs');
Route::get('/contact', [UserController::class, 'contact'])->name('UserContact');



  /* Admin Route */

Route::get('/admin', [AdminController::class, 'adminpage'])->name('AdminPage');
Route::get('/dashboaed', [AdminController::class, 'dashboaed'])->name('AdminDashboard');



   /* Home image Routes */

 Route::get('/homeimage1', [AdminController::class, 'homeimage1'])->name('HomeImage1');
 Route::get('/homeimage2', [AdminController::class, 'homeimage2'])->name('HomeImage2');
 Route::get('/homeimage3', [AdminController::class, 'homeimage3'])->name('HomeImage3');


  /* Package image Routes */

  Route::get('/packageimage1', [AdminController::class, 'packageimage1'])->name('PackageImage1');
  Route::get('/packageimage2', [AdminController::class, 'packageimage2'])->name('PackageImage2');
  Route::get('/packageimage3', [AdminController::class, 'packageimage3'])->name('PackageImage3');
  Route::get('/packageimage4', [AdminController::class, 'packageimage4'])->name('PackageImage4');

