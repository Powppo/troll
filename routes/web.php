<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\offerController;
use App\Http\Controllers\aboutUsController;
use App\Http\Controllers\feedbackController;
use App\Http\Controllers\UserOfferController;
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
Route::get('/userOffers', [App\Http\Controllers\UserOfferController::class, 'showuseroffer'])->name('userOffers');
Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('category');
Route::get('/aboutus', [App\Http\Controllers\aboutUsController::class, 'index'])->name('aboutus');
Route::get('/feedback', [App\Http\Controllers\feedbackController::class, 'index'])->name('feedback');
Route::post('/feedbackx', [App\Http\Controllers\feedbackController::class, 'createFeedback'])->name('createFeedback');


Route::get('/categoryUpload', [App\Http\Controllers\CategoryController::class, 'uploadctg'])->name('uploadctg');
Route::post('/categoryUpload', [App\Http\Controllers\CategoryController::class, 'store'])->name('upload_ctg');

/* Market Offer */
Route::get('/uploadOffers', [App\Http\Controllers\offerController::class, 'upload'])->name('upload');
Route::post('/uploadOffers', [App\Http\Controllers\offerController::class, 'storeOffer'])->name('upload_offer');
Route::get('/show/{product:slug}', [App\Http\Controllers\offerController::class, 'show']);
Route::get('/checkout/{product:slug}', [App\Http\Controllers\offerController::class, 'co']);

/* User Offer */


/* CO */
// Route::get('/checkout', [App\Http\Controllers\CheckoutController::class, 'checkout'])->name('checkout');
Route::post('/store', [App\Http\Controllers\CheckoutController::class, 'store'])->name('store');
Route::get('/terms', [App\Http\Controllers\TermsController::class, 'terms'])->name('terms');
