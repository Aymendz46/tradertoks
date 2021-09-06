<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\VideosController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\VideoController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/',[HomeController::class, 'store']);

Route::get('/course', [CourseController::class, 'index'])->name('course');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact-me', [ContactController::class, 'index'])->name('contact');

Route::middleware(['purchase'])->group( function(){
    Route::get('/purchase', [PaymentController::class, 'index'])->name('purchase');
    Route::post('/stripe', [PaymentController::class, 'stripe'])->name('stripe');
}); 

Route::middleware(['auth', 'student'])->group( function(){
    Route::get('/videos', [VideosController::class, 'index'])->name('videos');
    Route::post('/watched', [VideosController::class, 'watched'])->name('watched');
});

Route::get('handle-payment', [PaymentController::class, 'paypalhandle'])->name('make.payment');
Route::get('cancel-payment', [PaymentController::class, 'paypalcancel'])->name('cancel.payment');
Route::get('payment-success', [PaymentController::class, 'paypalsuccess'])->name('success.payment');

require __DIR__.'/auth.php';


Route::get('{any}', function() {
    return redirect('/');
 })->where('any', '.*');
