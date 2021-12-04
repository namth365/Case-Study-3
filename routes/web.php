<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CartController;
use Illuminate\Http\Request;



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

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::group(['prefix' => 'admin'], function () {
    Route::resource('categories',CategoryController::class);
    Route::resource('products',ProductController::class);
    Route::resource('users',UserController::class);
    Route::resource('customers',CustomerController::class);
    Route::resource('orders',OrderController::class);
    Route::get('search', [ProductController::class,'search'])->name('products.search');
});

Route::get('/carts',[CartController::class,'getCart'])->name('shop.getCart');
Route::get('/delete/{id}',[CartController::class,'destroy'])->name('shop.destroyCart');
Route::get('/checkout',[CartController::class,'checkout'])->name('shop.checkoutCart');
Route::post('/complete',[CartController::class,'complete'])->name('shop.complete');
Route::get('/success',[CartController::class,'success'])->name('shop.success');
Route::get('/404',[ShopController::class,'erros'])->name('shop.404');
Route::get('/login',[ShopController::class,'login'])->name('login');
Route::post('/postLogin',[ShopController::class,'postLogin'])->name('postLogin');
Route::get('/register',[ShopController::class,'register'])->name('shop.register');
Route::post('/postRegister',[ShopController::class,'postRegister'])->name('shop.postRegister');
Route::get('/product-detail/{id}',[HomeController::class,'product_detail'])->name('shop.product_detail');
Route::get('/shop/products',[ShopController::class,'products'])->name('shop.products');
Route::get('/shop/category/{slug}',[ShopController::class,'category'])->name('shop.category');

Route::get('/questions',[ShopController::class,'questions'])->name('shop.questions');
Route::get('/{idProduct}/add-to-cart', [CartController::class,'addToCart'])->name('add-to-cart');

Route::get('/my-account',[ShopController::class,'my_account'])->name('shop.my-account')->middleware('auth:customer');