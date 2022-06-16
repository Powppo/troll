<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\offerController;
use App\Http\Controllers\aboutUsController;
use App\Http\Controllers\feedbackController;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Auth::routes();

/* -PAGES- */
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/offers', [App\Http\Controllers\offerController::class, 'index'])->name('offers');
Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('category');
Route::get('/aboutus', [App\Http\Controllers\aboutUsController::class, 'index'])->name('aboutus');
Route::get('/feedback', [App\Http\Controllers\feedbackController::class, 'index'])->name('feedback');
Route::post('/feedbackx', [App\Http\Controllers\feedbackController::class, 'createFeedback'])->name('createFeedback');


Route::get('/categoryUpload', [App\Http\Controllers\CategoryController::class, 'upload'])->name('upload');
Route::post('/categoryUpload', [App\Http\Controllers\CategoryController::class, 'store'])->name('upload_ctg');


Route::get('/uploadOffers', [App\Http\Controllers\offerController::class, 'upload'])->name('upload');
Route::post('/uploadOffers', [App\Http\Controllers\offerController::class, 'storeOffer'])->name('upload_offer');
// Route::get('/itemDetail/{product:slug}', 'show', [App\Http\Controllers\offerController::class]);
// Route::resource('/uploadOffers', offerController::class);

/* -OFFERS- */
Route::get('/mouse', [App\Http\Controllers\offerController::class, 'mouse'])->name('mouse');
Route::get('/keyboard', [App\Http\Controllers\offerController::class, 'keyboard'])->name('keyboard');
Route::get('/monitor', [App\Http\Controllers\offerController::class, 'monitor'])->name('monitor');
Route::get('/headset', [App\Http\Controllers\offerController::class, 'headset'])->name('headset');
Route::get('/mouse2', [App\Http\Controllers\offerController::class, 'mouse2'])->name('mouse2');
Route::get('/earphone', [App\Http\Controllers\offerController::class, 'earphone'])->name('earphone');
Route::get('/keyboard2', [App\Http\Controllers\offerController::class, 'keyboard2'])->name('keyboard2');
Route::get('/headset2', [App\Http\Controllers\offerController::class, 'headset2'])->name('headset2');

/* CO */
Route::get('/checkout', [App\Http\Controllers\CheckoutController::class, 'checkout'])->name('checkout');
Route::post('/store', [App\Http\Controllers\CheckoutController::class, 'store'])->name('store');
Route::get('/terms', [App\Http\Controllers\TermsController::class, 'terms'])->name('terms');
