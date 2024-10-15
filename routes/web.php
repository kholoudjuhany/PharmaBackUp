<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HICController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MedController;
use App\Http\Controllers\PrescriptionController;

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

Route::get('/main', function () {
    return view('landing.pages.main'); 
})->name('main');

Route::resource('users', UserController::class);

Route::resource('hics', HICController::class);

Route::resource('categories', CategoryController::class);

Route::resource('medicines', MedController::class);

Route::resource('prescriptions', PrescriptionController::class);

Route::get('/dashboard', function () {
    return view('dashWelcome');
})->name('dashboard');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
