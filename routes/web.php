<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
<<<<<<< HEAD

//Dark Mode and Color Switcher Import
use App\Http\Controllers\DarkModeController;
use App\Http\Controllers\ColorSchemeController;

//Import Customer Page(About Us, Frequently Asked Question, Contact Page)
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\HomeController;

//Transactions Controller
use App\Http\Controllers\Frontend\Transaction\ContactController;
use App\Http\Controllers\Frontend\Transaction\ShippingController;

//Import Customer Account Controller
=======
//use App\Http\Controllers\PageController;
use App\Http\Controllers\DarkModeController;
use App\Http\Controllers\ColorSchemeController;
use App\Http\Controllers\Backend\Page\DashboardController;
use App\Http\Controllers\Backend\Page\ProfileController;
use App\Http\Controllers\Backend\Auth\LoginController;
use App\Http\Controllers\Backend\Auth\ResetController;
use App\Http\Controllers\Backend\Auth\RegisterController;
use App\Http\Controllers\Backend\Auth\ChangePasswordController;
use App\Http\Controllers\Backend\Auth\LogoutController;
use App\Http\Controllers\Backend\Product\BrandController;
use App\Http\Controllers\Backend\Product\CategoryController;
use App\Http\Controllers\Backend\Product\ProductController;
use App\Http\Controllers\Backend\Product\ProductImageController;
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
use App\Http\Controllers\Frontend\Transaction\ContactController;


>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
use App\Http\Controllers\Frontend\Auth\CustomerProfileController;
use App\Http\Controllers\Frontend\Auth\CustomerResetController;
use App\Http\Controllers\Frontend\Auth\CustomerDataController;
use App\Http\Controllers\Frontend\Auth\CustomerLoginController;
use App\Http\Controllers\Frontend\Auth\CustomerRegisterController;
use App\Http\Controllers\Frontend\Auth\CustomerLogoutController;
<<<<<<< HEAD

//Import Customer Product and Cart ShippingController
use App\Http\Controllers\Frontend\Cart\CartController;
use App\Http\Controllers\Frontend\Cart\ProductCatalogController;

//Dark Mode Switcher Route
Route::get('dark-mode-switcher', [DarkModeController::class, 'switch'])->name('dark-mode-switcher');
//Color Mode Switcher Route
Route::get('color-scheme-switcher/{color_scheme}', [ColorSchemeController::class, 'switch'])->name('color-scheme-switcher');

Route::middleware(['PreventBackHistory'])->group(function () {
    Route::get('/',function(){
        return view('customer.page.main.home');
    });

    Route::get('/',[Homecontroller::class,'index'])->name('home');
    Route::get('/about', [PageController::class,'about'])->name('about');
    Route::get('/contact', [ContactController::class,'index'])->name('contact');
    Route::post('/contact', [ContactController::class,'store'])->name('sendemailcontact');
    Route::get('/terms', [PageController::class,'terms'])->name('terms');
    Route::get('/faq', [PageController::class,'faq'])->name('faq');
    Route::get('/privacy', [PageController::class,'privacy'])->name('privacy');
    Route::get('/shippingdelivery', [PageController::class,'shipping'])->name('shippingdelivery');
    Route::get('/returnexchanges', [PageController::class,'return'])->name('return');
    Route::get('/productcatalog', [ProductCatalogController::class,'index'])->name('product');
    Route::get('/productcatalog/{product:name}', [ProductCatalogController::class,'show'])->name('productshow');
    Route::get('/product/cart');
    Route::get('/verify',[CustomerRegisterController::class,'verify'])->name('verify');

    Route::middleware(['guest:customer'])->group(function () {
=======
use App\Http\Controllers\Frontend\Cart\CartController;
use App\Http\Controllers\Frontend\Cart\WishlistController;
use App\Http\Controllers\Frontend\Cart\ProductCatalogController;


Route::get('/',function(){
    return view('customer.page.main.home');
});


Route::get('/about', [PageController::class,'about'])->name('about');
Route::get('/contact', [ContactController::class,'index'])->name('contact');
Route::post('/contact', [ContactController::class,'store'])->name('sendemailcontact');
Route::get('/terms', [PageController::class,'terms'])->name('terms');
Route::get('/faq', [PageController::class,'faq'])->name('faq');
Route::get('/privacy', [PageController::class,'privacy'])->name('privacy');
Route::get('/shippingdelivery', [PageController::class,'shipping'])->name('shipping');
Route::get('/returnexchanges', [PageController::class,'return'])->name('return');

Route::get('/productcatalog', [ProductCatalogController::class,'index'])->name('product');
Route::get('/productcatalog/{product:name}', [ProductCatalogController::class,'show'])->name('productshow');
Route::get('/product/cart');

//Route::resource('productcatalog', ProductCatalogController::class)->only(['index','show']);

    Route::middleware(['guest:customer','PreventBackHistory'])->group(function () {
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
        Route::resource('CLogin', CustomerLoginController::class)->only(['index','store']);
        Route::resource('CRegister', CustomerRegisterController::class)->only(['index','store']);
        Route::resource('resetcustomer', CustomerResetController::class)->only(['index','store']);
        Route::get('resetcustomer/password/{token}', [CustomerResetController::class, 'ShowResetForm'])->name('customer.reset.password.form');
        Route::post('resetcustomer/password',[CustomerResetController::class,'ResetPassword'])->name('customer.reset.password');
    });
<<<<<<< HEAD

    Route::middleware(['auth:customer'])->group(function () {
=======
    Route::middleware(['auth:customer','PreventBackHistory'])->group(function () {

>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
        Route::resource('cart', CartController::class)->only(['index','store']);
        Route::post('/product/cart/', [CartController::class,'addToCart']);
        Route::resource('wishlist', WishlistController::class)->only(['index','store']);
        Route::get('/CLogout', [CustomerLogoutController::class, 'store'])->name('CLogout');
<<<<<<< HEAD

        Route::middleware(['is_customer_verify_email'])->group(function () {
            Route::get('/shipping', [ShippingController::class,'index'])->name('shipping');
        });

=======
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
        Route::group(['prefix' => 'user'],function(){
            Route::get('/profile', [CustomerProfileController::class,'index'])->name('customer.profile');
            Route::get('/address', [CustomerProfileController::class,'address'])->name('customer.address');
            Route::get('/address/create', [CustomerProfileController::class,'createaddress'])->name('customer.address.create');
            Route::post('address/create',[CustomerProfileController::class,'saveaddress']);
            Route::get('/address/edit/{id}', [CustomerProfileController::class,'editaddress'])->name('customer.address.edit');
            Route::post('/address/edit/{id}', [CustomerProfileController::class,'updateaddress']);
            Route::delete('/address/{id}', [CustomerProfileController::class, 'destroyaddress']);
            Route::get('/changepassword',[CustomerProfileController::class,'changepassword'])->name('customer.change.pass');
            Route::post('changepassword',[CustomerProfileController::class,'resetpass']);
        });

        Route::group(['prefix' => 'customer'],function(){
            Route::get('/orders', [CustomerDataController::class,'index'])->name('customer.orders');
            Route::get('/returns', [CustomerDataController::class,'returns'])->name('customer.returns');
            Route::get('/reviews',[CustomerDataController::class,'reviews'])->name('customer.reviews');
            Route::get('/cancellations',[CustomerDataController::class,'cancellations'])->name('customer.cancellations');
<<<<<<< HEAD
        });
    });
});



=======

        });

        /*
        Route::get('/about', [PageController::class,'about'])->name('about');
        Route::get('/contact', [ContactController::class,'index'])->name('contact');
        Route::post('/contact', [ContactController::class,'store'])->name('sendemailcontact');
        Route::get('/terms', [PageController::class,'terms'])->name('terms');
        Route::get('/faq', [PageController::class,'faq'])->name('faq');
        Route::get('/privacy', [PageController::class,'privacy'])->name('privacy');

        Route::get('/product', [PageController::class,'product'])->name('product');
        */
    });



Route::group(['prefix' => 'admin'],function(){
    Route::middleware(['guest:web','PreventBackHistory'])->group(function () {
        Route::resource('login', LoginController::class)->only(['index','store']);
        Route::resource('register', RegisterController::class)->only(['index','store']);
        Route::get('reset/password/{token}', [ResetController::class, 'ShowResetForm'])->name('reset.password.form');
        Route::post('reset/password',[ResetController::class,'ResetPassword'])->name('reset.password');
        Route::resource('reset', ResetController::class)->only(['index','store']);
        Route::get('dark-mode-switcher', [DarkModeController::class, 'switch'])->name('dark-mode-switcher');
        Route::get('color-scheme-switcher/{color_scheme}', [ColorSchemeController::class, 'switch'])->name('color-scheme-switcher');
    });

    Route::middleware(['auth:web'])->group(function () {
        //Export Files for Category
        Route::get('/category/excel',[CategoryController::class,'exportcategoriesexcel'])->name('exportcategoriesexcel');
        Route::get('/category/csv',[CategoryController::class,'exportcategoriescsv'])->name('exportcategoriescsv');
        Route::get('/category/html',[CategoryController::class,'exportcategorieshtml'])->name('exportcategorieshtml');
        Route::get('/category/pdf',[CategoryController::class,'exportcategoriespdf'])->name('exportcategoriespdf');
        //Export Files for Brand
        Route::get('/brand/excel',[BrandController::class,'exportbrandexcel'])->name('exportbrandexcel');
        Route::get('/brand/csv',[BrandController::class,'exportbrandcsv'])->name('exportbrandcsv');
        Route::get('/brand/html',[BrandController::class,'exportbrandhtml'])->name('exportbrandhtml');
        Route::get('/brand/pdf',[BrandController::class,'exportbrandpdf'])->name('exportbrandpdf');
        //Export Files for Product
        Route::get('/product/excel',[ProductController::class,'exportproductexcel'])->name('exportproductexcel');
        Route::get('/product/csv',[ProductController::class,'exportproductcsv'])->name('exportproductcsv');
        Route::get('/product/html',[ProductController::class,'exportproducthtml'])->name('exportproducthtml');
        Route::get('/product/pdf',[ProductController::class,'exportproductpdf'])->name('exportproductpdf');

        Route::middleware(['PreventBackHistory'])->group(function () {
            Route::resource('dashboard', DashboardController::class)->only(['index']);
            Route::get('/logout', [LogoutController::class, 'store'])->name('logout');
            Route::resource('brand',  BrandController::class)->only(['index']);
            Route::resource('category',  CategoryController::class)->only('index');
            Route::resource('inventory',  InventoryController::class)->except(['edit','show','create']);
            Route::post('addimage/{id}', [ProductImageController::class,'addImages'])->name('add');
            Route::delete('/productimage/{id}', [ProductImageController::class,'removeImage']);
            Route::get('/product/archive', [ProductController::class,'ProductArchiveIndex'])->name('ProductArchiveIndex');
            Route::put('/product/archive/{id}', [ProductController::class, 'ProductArchiveRestore']);
            Route::delete('/product/archive/{id}', [ProductController::class, 'ProductArchiveDestroy']);
            Route::resource('product',  ProductController::class);
            Route::resource('orders', OrderController::class)->only('index');
            Route::resource('chat', ChatController::class)->only('index');
            Route::resource('post', PostController::class)->only('index');

            Route::get('/profile/changepassword', [ProfileController::class,'changepass'])->name('AdminChangePass');
            Route::post('/profile/changepassword', [ProfileController::class,'resetpass']);

            Route::resource('profile', ProfileController::class)->only('index');
            Route::resource('changepassword', ChangePasswordController::class)->only('index');
            Route::resource('analytics', AnalyticsController::class)->only('index');
            Route::resource('report', ReportController::class)->only('index');
            Route::resource('customer', CustomerController::class)->only('index');
            Route::resource('user', UsersController::class)->only('index');
            Route::resource('role', RoleController::class)->only('index');
            Route::resource('permission', PermissionController::class)->only('index');
        });
    });

});
>>>>>>> ef57359fd894ee32ceb516246ccc1af1ff09f8aa
