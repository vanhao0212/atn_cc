<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AmnhacController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

// đăng ký
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);

// trang chủ           
Route::get('/', [HomeController::class, 'indexx'])->name('index');
Route::get('/index', [HomeController::class, 'indexx'])->name('index');
//trang dashboard
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard')->middleware('checklogin::class');;

//logout tài khoản trang index
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');



//đăng nhập trang chủ
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

//đăng nhập trang dashboard
Route::post('/adminlogin', [AdminLoginController::class, 'adminlogin'])->name('adminlogin');
Route::get('/adminlogin', [AdminLoginController::class, 'showAdminLoginForm'])->name('adminlogin');


//hiển thị user 
Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index_user');


//hiển thị product
Route::get('/product', [App\Http\Controllers\ProductController::class, 'index'])->name('product.index');

//thêm sửa xóa sp
Route::get('/product/index', [ProductController::class, 'index'])->name('products.index')->middleware('checklogin::class');;
Route::get('/product/create', [ProductController::class, 'create'])->name('products.create')->middleware('checklogin::class');;
Route::get('/product/delete/{id}', [ProductController::class, 'destroy'])->name('products.destroy')->middleware('checklogin::class');;
Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('products.edit')->middleware('checklogin::class');;
Route::post('/product/update/{id}', [ProductController::class, 'update'])->name('products.update')->middleware('checklogin::class');;
Route::get('/product/show/{id}', [ProductController::class, 'show'])->name('products.show')->middleware('checklogin::class');;
Route::post('/product/store', [ProductController::class, 'store'])->name('products.store')->middleware('checklogin::class');;

Route::get('/category/index', [CategoryController::class, 'index'])->name('category.index')->middleware('checklogin::class');;
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create')->middleware('checklogin::class');;
Route::get('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.destroy')->middleware('checklogin::class');;
Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit')->middleware('checklogin::class');;
Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update')->middleware('checklogin::class');;
Route::get('/category/show/{id}', [CategoryController::class, 'show'])->name('category.show')->middleware('checklogin::class');;
Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store')->middleware('checklogin::class');;

Route::get('/products/search', [ProductController::class, 'search'])->name('products.search');