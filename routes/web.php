<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
   return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//user
Route::middleware(['auth', 'user'])->group(function () {
   Route::get('/index', [UserController::class, 'index'])->name('index');
});



//admin
Route::middleware(['auth', 'admin'])->group(function () {
   Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
   Route::resource('/brand', BrandController::class);
});
