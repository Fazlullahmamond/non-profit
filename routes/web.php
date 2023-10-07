<?php

use App\Http\Controllers\FrontPageController;
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

Route::get('/', [FrontPageController::class, 'index'])->name('home');
Route::get('/contact', [FrontPageController::class, 'contact'])->name('contact');
Route::post('/contact', [FrontPageController::class, 'save_contact'])->name('contact_store');

Route::get('/gallery', [FrontPageController::class, 'gallery'])->name('gallery');
Route::get('/appeals', [FrontPageController::class, 'appeals'])->name('appeals');
Route::get('/about', [FrontPageController::class, 'about'])->name('about');
