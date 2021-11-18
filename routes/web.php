<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ThankyouController;
use App\Http\Controllers\SellerController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/','LandingPageController@index')->name('welcome');

Route::get('/', [LandingPageController::class,'index'])->name('welcome');
Route::get('/shop',[LandingPageController::class,'shop'])->name('layout.shop');

Route::get('/checkout',[CheckoutController::class,'index'])->name('checkout')->middleware('auth');
Route::post('/checkout',[CheckoutController::class,'store'])->name('checkout.store');

Route::post('/thankyou',[ThankyouController::class,'store'])->name('thankyou');

Route::get('/product/{product}',[LandingPageController::class,'product'])->name('layout.product');
Route::get('/cart',[CartController::class,'index'])->name('layout.cart');
Route::post('/cart',[CartController::class,'store'])->name('layout.cart');
Route::delete('/cart/{product}',[CartController::class,'destroy'])->name('cart.destroy');
Route::patch('/cart/{product}',[CartController::class,'update'])->name('cart.update');
Route::get('empty', function(){
    Cart::destroy();
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\LandingPageController::class, 'index'])->name('welcome');
Route::get('/sellerPage', [App\Http\Controllers\SellerController::class, 'index'])->name('sellerPage');
Route::post('/sellerPage', [App\Http\Controllers\SellerController::class, 'update'])->name('shipping');
Route::get('/sellerPage/{orderNumber}',[SellerController::class,'product'])->name('seller.product');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
