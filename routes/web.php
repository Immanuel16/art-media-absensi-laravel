<?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\CrewController;
use App\Http\Controllers\DataPelayananController;
use App\Http\Controllers\FormAcaraController;
use App\Http\Controllers\FormPelayananController;
use App\Http\Controllers\FormProcessController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Spatie\GoogleCalendar\Event;


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

// Routing untuk Home
Route::get('/', [HomeController::class, 'index']);

// Routing untuk absensi
Route::get('/absensi', [AbsensiController::class, 'index'])->name('halamanAbsensi');

// Routing untuk Crew
Route::get('/crew', [CrewController::class, 'index']);

// Routing untuk Gallery
Route::get('/gallery', [GalleryController::class, 'index']);

// Routing untuk login
Route::get('/login', [LoginController::class, 'index']);

// Routing untuk register
Route::get('/register', [RegisterController::class, 'index']);


// Routing untuk form request shooting
Route::get('/form-acara', [FormAcaraController::class, 'index'])->name('form-acara');
Route::post('/form-acara/test', [FormAcaraController::class, 'sendEmail']);

// Routing untuk form pelayanan
Route::get('form-pelayanan', [FormPelayananController::class, 'index']);
Route::post('form-pelayanan/add', [FormPelayananController::class, 'add']);

/* routing untuk data pelayanan */
Route::get('data-pelayanan', [DataPelayananController::class, 'index']);
Route::get('data-pelayanan/search', [DataPelayananController::class, 'search']);


// Route::resource('sendEmail', [FormProcessController::class]);