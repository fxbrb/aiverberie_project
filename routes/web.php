<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ContactController;
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

Route::get('/professionnels', function () {
    return view('professionals');
})->name('professionals');

Route::get('/collectivité', function () {
    return view('collectivity');
})->name('collectivity');

Route::get('/qui-sommes-nous', function () {
    return view('about');
})->name('about');

// CONTACT

Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('send-message', [ContactController::class, 'contact_association'])->name('contact.send');


// JOB OFFER
Route::get('/offres-emploi', [ContactController::class, 'jobView'])->name('job');
Route::post('send-job-offer', [ContactController::class, 'send_joboffer'])->name('job.send');


// SERVICES

Route::get('/particulier', [ContactController::class, 'particularView'])->name('particular');
Route::post('send-service-offer', [ContactController::class, 'sendParticularService'])->name('particular.send');







