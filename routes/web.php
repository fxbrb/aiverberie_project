<?php

use App\Http\Controllers\Auth\AuthController;
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
    return view('home');
});


// Authentification

Route::get('login', [AuthController::class, 'loginView'])->name('login');
Route::post('custom-login', [AuthController::class, 'login'])->name('login.user'); 
Route::get('register', [AuthController::class, 'registrationView'])->name('register-user');
Route::post('custom-registration', [AuthController::class, 'registration'])->name('register.user'); 
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');
