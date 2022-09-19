<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
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



Route::group(['prefix' => 'admin','as' => 'admin.'],function(){
    Route::get('dark-mode-switcher', [DarkModeController::class, 'switch'])->name('dark-mode-switcher');
    Route::get('color-scheme-switcher/{color_scheme}', [ColorSchemeController::class, 'switch'])->name('color-scheme-switcher');
    Route::get('/logout', [LogoutController::class, 'store'])->name('logout');
    Route::resource('login', LoginController::class)->only(['index','store']);

    Route::resource('register', RegisterController::class)->only(['index','store']);
    Route::group(['middleware' => 'auth'],function(){

    Route::resource('dashboard', DashboardController::class)->only(['index']);
    Route::resource('brand',  BrandController::class)->only(['index']);
    Route::resource('category',  CategoryController::class)->only('index');
    Route::resource('inventory',  InventoryController::class)->except(['edit','show','create']);

    Route::post('addimage/{id}', [ProductImageController::class,'addImages'])->name('add');
    Route::delete('/productimage/{id}', [ProductImageController::class,'removeImage']);

    Route::get('/product/archive', [ProductController::class,'ProductArchiveIndex'])->name('ProductArchiveIndex');
    Route::put('/product/archive/{id}', [ProductController::class, 'ProductArchiveRestore']);
    Route::delete('/product/archive/{id}', [ProductController::class, 'ProductArchiveDestroy']);
    Route::resource('product',  ProductController::class)->except(['show']);

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