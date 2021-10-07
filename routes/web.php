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
})->name('home');


Route::get('/particulier', function () {
    return view('particulars');
})->name('particular');

Route::get('/professionnels', function () {
    return view('professionals');
})->name('professionals');

Route::get('/demandeurs', function () {
    return view('applicants');
})->name('applicants');

Route::get('/offres-emploi', function () {
    return view('job');
})->name('job');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');





