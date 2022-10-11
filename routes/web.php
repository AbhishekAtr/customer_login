<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('auth.login');
});

Route::post('client-login', [RegistrationController::class, 'Login'])->name('login'); 

Route::get('registration',[RegistrationController::class,'index'])->name('register');

Route::post('client-registration',[RegistrationController::class,'register'])->name('client-register');

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard'); 

Route::get('listing', [DashboardController::class, 'formData'])->name('listing'); 
