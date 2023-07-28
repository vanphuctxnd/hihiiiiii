<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\ShopController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\CartController;
use App\Http\Controllers\Front\CheckOutController;
use App\Http\Controllers\Front\AccountController;

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

Route::get('/', [HomeController::class, 'index']);

Route::prefix('shop')->group(function(){
    Route::get('/', [ShopController::class, 'index']);
    Route::get('/product/{id}', [ShopController::class,'show']);
    Route::post('/product/{id}', [ShopController::class,'postComment']);
    Route::post('shop', [ShopController::class,'index']);
    Route::get('category/{categoryName}',[ShopController::class,'category']);
});

Route::prefix('cart')->group(function(){
    Route::get('/', [CartController::class, 'index']);
    Route::get('add', [CartController::class, 'add']);
    Route::get('delete', [CartController::class, 'delete']);
    Route::get('destroy', [CartController::class, 'destroy']);
    Route::get('update', [CartController::class, 'update']);
});

Route::prefix('checkout')->group(function(){
    Route::get('/', [CheckOutController::class, 'index']);
    Route::post('/', [CheckOutController::class, 'addOrder']);
    Route::get('/vnPayCheck', [CheckOutController::class, 'vnPayCheck']);
    Route::get('/result', [CheckOutController::class, 'result']);
});

Route::prefix('account')->group(function(){
    Route::get('login',[AccountController::class,'login']);
    Route::post('login',[AccountController::class,'checkLogin']);
    Route::get('logout',[AccountController::class,'logout']);
    Route::get('register',[AccountController::class,'register']);
    Route::post('register',[AccountController::class,'postRegister']);
    Route::prefix('my-order')->middleware('CheckMemberLogin')->group(function () {
        Route::get('/', [AccountController::class, 'myOrderIndex']);
        Route::get('{id}', [AccountController::class, 'myOrderShow']);
    });
});

Route::get('contact',function(){return view('front.contact');});
Route::get('blog',function(){return view('front.blog');});
Route::get('faq',function(){return view('front.faq');});
Route::get('blog-details',function(){return view('front.blog-details');});