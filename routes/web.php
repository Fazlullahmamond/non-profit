<?php

use App\Http\Controllers\FrontCategoryController;
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
Route::get('/appeals', [FrontPageController::class, 'appeals'])->name('appeals');
Route::get('/appeal/{id}/details', [FrontPageController::class, 'appeal_details'])->name('appeal_details');

Route::get('/contact', [FrontPageController::class, 'contact'])->name('contact');
Route::post('/contact', [FrontPageController::class, 'save_contact'])->name('contact_store');

Route::get('/become-volunteer', [FrontPageController::class, 'become_volunteer'])->name('become_volunteer');
Route::post('/become-volunteer', [FrontPageController::class, 'save_volunteer'])->name('become_volunteer_store');

Route::get('/category/{id}/details', [FrontCategoryController::class, 'category_details'])->name('category_details');


Route::get('/gallery', [FrontPageController::class, 'gallery'])->name('gallery');
Route::get('/appeals', [FrontPageController::class, 'appeals'])->name('appeals');
Route::get('/about', [FrontPageController::class, 'about'])->name('about');

Route::get('/blogs', [FrontPageController::class, 'blogs'])->name('blogs');
Route::get('/blog/{id}/details', [FrontPageController::class, 'blog_details'])->name('blog_details');

Route::get('/our_works', [FrontPageController::class, 'our_works'])->name('our_works');
Route::get('/our_work/{id}/details', [FrontPageController::class, 'our_work_details'])->name('our_work_details');




