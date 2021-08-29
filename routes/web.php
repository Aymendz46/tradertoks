<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\VideosController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PaymentController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/course', [CourseController::class, 'index'])->name('course');
Route::get('/videos', [VideosController::class, 'index'])->name('videos');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact-me', [ContactController::class, 'index'])->name('contact');
Route::get('/purchase', [PaymentController::class, 'index'])->name('purchase');


Route::middleware(['auth', 'student'])->group( function(){
    //if the user purchased the course, {check the role or its status}
});
require __DIR__.'/auth.php';
