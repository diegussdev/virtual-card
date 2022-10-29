<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', [ProfileController::class, 'home'])->name('home');
Route::get('/generate', [ProfileController::class, 'generate'])->name('generate');
Route::post('/profile-store', [ProfileController::class, 'store'])->name('profile-store');
Route::get('/qr-code/{profile:slug}', [ProfileController::class, 'qrCode'])->name('qr-code');
Route::get('/profile/{profile:slug}', fn()=>'profile')->name('profile');