<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\SizeController;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;

/*
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
// Route login(đang nhập) vào phân admin(quản trị)
Route::get('/login',[AuthController::class,'index'])->name('login');
Route::post('/login',[AuthController::class,'login'])->name('login.post');
Route::get('/logout',[AuthController::class,'logout'])->name('logout.index');


// Route phần admin
Route::middleware('auth')->group(function(){
    Route::get('/admin',[DashboardController::class,'index'])->name('dashboard');


    // Route phần admin-product
    Route::group(['prefix'=>'product'],function(){
        Route::get('/',[ProductController::class,'index'])->name('product.index');
        Route::get('create',[ProductController::class,'create'])->name('product.create');
        Route::post('store',[ProductController::class,'store'])->name('product.store');
        Route::get('edit/{id}',[ProductController::class,'edit'])->name('product.edit');
        Route::post('update',[ProductController::class,'update'])->name('product.update');
        Route::get('remove/{id}',[ProductController::class,'delete'])->name('product.remove');

    });

    // Route phần admin-category
    Route::group(['prefix'=>'category'],function(){
        Route::get('/',[CategoryController::class,'index'])->name('category.index');
        Route::get('create',[CategoryController::class,'create'])->name('category.create');
        Route::post('store',[CategoryController::class,'store'])->name('category.store');
        Route::get('edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
        Route::post('update/{id}',[CategoryController::class,'update'])->name('category.update');
        Route::get('remove/{id}',[CategoryController::class,'delete'])->name('category.remove');
    });

    // Route phần admin-color
    Route::group(['prefix'=>'color'],function(){
        Route::get('/',[ColorController::class,'index'])->name('color.index');
        Route::get('create',[ColorController::class,'create'])->name('color.create');
        Route::post('store',[ColorController::class,'store'])->name('color.store');
        Route::get('edit/{id}',[ColorController::class,'edit'])->name('color.edit');
        Route::post('update/{id}',[ColorController::class,'update'])->name('color.update');
        Route::get('remove/{id}',[ColorController::class,'delete'])->name('color.remove');
    });

    // Route phần admin-size
    Route::group(['prefix'=>'size'],function(){
        Route::get('/',[SizeController::class,'index'])->name('size.index');
        Route::get('create',[SizeController::class,'create'])->name('size.create');
        Route::post('store',[SizeController::class,'store'])->name('size.store');
        Route::get('edit/{id}',[SizeController::class,'edit'])->name('size.edit');
        Route::post('update/{id}',[SizeController::class,'update'])->name('size.update');
        Route::get('remove/{id}',[SizeController::class,'delete'])->name('size.remove');
    });
});

// Route::get('/admin',[DashboardController::class,'index'])->name('admin.dashboard.index');

// Route phần client trang web 
Route::group(['prefix'=> '/'], function(){
    // route hiển thị trang chủ product(sản phẩm)
    Route::get('/',[HomeController::class,'index'])->name('home');
    // Route hiển thị danh sách sản phẩm 
    Route::get('/list',[HomeController::class,'listProduct'])->name('list');
    // Route hiển thị chi tiền product(sản phẩm)
    Route::get('/detail/{id}',[HomeController::class,'detail'])->name('detail');
    // Route lưu product(sản phẩm) theo id vào giỏ hàng(cart)
    Route::post('/save-cart/{id}',[HomeController::class,'saveCart'])->name('save-cart');
    // Route hiển thị list product(sản phẩm) theo category(danh mục)
    Route::get('/category/{id}',[HomeController::class,'categoryProduct'])->name('category');
    // Route thêm product(sản phẩm) vào giỏ hàng(cart) con
    Route::get('/add-cart/{id?}',[HomeController::class,'addCart'])->name('add-cart');
    // route xóa product(sản phẩm) trong giỏ hàng(cart) con
    Route::get('/delete-cart/{id}',[HomeController::class,'deleteItemCart'])->name('delete-cart');
    Route::get('/list-small',[HomeController::class,'listSmall'])->name('list-small');
    // Route list giỏ hảng(cart)
    Route::get('/list-cart',[HomeController::class,'listCart'])->name('list-cart');
    // Route xóa các sản phẩm trong list giỏ hàng
    Route::get('/delete-list-cart/{id}',[HomeController::class,'deleteListItemCart'])->name('delete-list-cart');
    
    // Route::get('/update-cart/',[HomeController::class,'updateCart'])->name('update-cart');

    Route::get('/update-cart',[HomeController::class,'updateCart'])->name('update-cart');

    Route::get('/checkout',[OrderController::class,'checkout'])->name('checkout');
    Route::post('/post-checkout',[OrderController::class,'postCheckout'])->name('post-checkout');


});