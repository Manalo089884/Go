<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
//use App\Http\Controllers\PageController;
use App\Http\Controllers\DarkModeController;
use App\Http\Controllers\ColorSchemeController;
use App\Http\Controllers\Backend\Page\DashboardController;
use App\Http\Controllers\Backend\Auth\LoginController;
use App\Http\Controllers\Backend\Auth\RegisterController;
use App\Http\Controllers\Backend\Auth\LogoutController;
use App\Http\Controllers\Backend\Product\BrandController;
use App\Http\Controllers\Backend\Product\CategoryController;
use App\Http\Controllers\Backend\Product\ProductController;
use App\Http\Controllers\Backend\Product\ProductImageController;
use App\Http\Controllers\Backend\Product\ProductArchiveController;
use App\Http\Controllers\Backend\Product\InventoryController;
use App\Http\Controllers\Backend\Transaction\ChatController;
use App\Http\Controllers\Backend\Transaction\OrderController;
use App\Http\Controllers\Backend\Transaction\PostController;
use App\Http\Controllers\Backend\Reports\AnalyticsController;
use App\Http\Controllers\Backend\Reports\ReportController;
use App\Http\Controllers\Backend\Users\CustomerController;
use App\Http\Controllers\Backend\Users\RoleController;
use App\Http\Controllers\Backend\Users\UsersController;
use App\Http\Controllers\Backend\Users\PermissionController;

use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\Auth\CustomerLoginController;
use App\Http\Controllers\Frontend\Auth\CustomerRegisterController;

Route::get('/',function(){
    return view('customer.page.main.home');
});

Route::get('/about', [PageController::class,'about'])->name('about');
Route::get('/contact', [PageController::class,'contact'])->name('contact');
Route::get('/terms', [PageController::class,'terms'])->name('terms');
Route::resource('CLogin', CustomerLoginController::class)->only(['index','store']);
Route::resource('CRegister', CustomerRegisterController::class)->only(['index','store']);

Route::group(['prefix' => 'admin'],function(){
    Route::get('dark-mode-switcher', [DarkModeController::class, 'switch'])->name('dark-mode-switcher');
    Route::get('color-scheme-switcher/{color_scheme}', [ColorSchemeController::class, 'switch'])->name('color-scheme-switcher');
    Route::get('/logout', [LogoutController::class, 'store'])->name('logout');
    Route::resource('login', LoginController::class)->only(['index','store']);

    Route::resource('register', RegisterController::class)->only(['index','store']);
    Route::group(['middleware' => 'auth'],function(){

    Route::resource('dashboard', DashboardController::class)->only(['index']);

    Route::get('/brand/excel',[BrandController::class,'exportbrandexcel'])->name('exportbrandexcel');
    Route::get('/brand/csv',[BrandController::class,'exportbrandcsv'])->name('exportbrandcsv');
    Route::get('/brand/html',[BrandController::class,'exportbrandhtml'])->name('exportbrandhtml');
    Route::get('/brand/pdf',[BrandController::class,'exportbrandpdf'])->name('exportbrandpdf');
    Route::resource('brand',  BrandController::class)->only(['index']);

    Route::get('/category/excel',[CategoryController::class,'exportcategoriesexcel'])->name('exportcategoriesexcel');
    Route::get('/category/csv',[CategoryController::class,'exportcategoriescsv'])->name('exportcategoriescsv');
    Route::get('/category/html',[CategoryController::class,'exportcategorieshtml'])->name('exportcategorieshtml');
    Route::get('/category/pdf',[CategoryController::class,'exportcategoriespdf'])->name('exportcategoriespdf');
    Route::resource('category',  CategoryController::class)->only('index');



    Route::resource('inventory',  InventoryController::class)->except(['edit','show','create']);

    Route::post('addimage/{id}', [ProductImageController::class,'addImages'])->name('add');
    Route::delete('/productimage/{id}', [ProductImageController::class,'removeImage']);

    Route::get('/product/archive', [ProductController::class,'ProductArchiveIndex'])->name('ProductArchiveIndex');
    Route::put('/product/archive/{id}', [ProductController::class, 'ProductArchiveRestore']);
    Route::delete('/product/archive/{id}', [ProductController::class, 'ProductArchiveDestroy']);

    Route::get('/product/excel',[ProductController::class,'exportproductexcel'])->name('exportproductexcel');
    Route::get('/product/csv',[ProductController::class,'exportproductcsv'])->name('exportproductcsv');
    Route::get('/product/html',[ProductController::class,'exportproducthtml'])->name('exportproducthtml');
    Route::get('/product/pdf',[ProductController::class,'exportproductpdf'])->name('exportproductpdf');
    Route::resource('product',  ProductController::class)->parameters([
        'product' => 'name',
    ]);

    Route::resource('orders', OrderController::class)->only('index');
    Route::resource('chat', ChatController::class)->only('index');
    Route::resource('post', PostController::class)->only('index');

    Route::resource('analytics', AnalyticsController::class)->only('index');
    Route::resource('report', ReportController::class)->only('index');

    Route::resource('customer', CustomerController::class)->only('index');
    Route::resource('user', UsersController::class)->only('index');
    Route::resource('role', RoleController::class)->only('index');
    Route::resource('permission', PermissionController::class)->only('index');
    });
});