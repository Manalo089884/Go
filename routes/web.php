<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

//Dark Mode and Color Switcher Import
use App\Http\Controllers\DarkModeController;
use App\Http\Controllers\ColorSchemeController;
//Admin Dashboard Import
use App\Http\Controllers\Backend\Page\DashboardController;
//Admin Controller Import
use App\Http\Controllers\Backend\Page\ProfileController;
use App\Http\Controllers\Backend\Auth\LoginController;
use App\Http\Controllers\Backend\Auth\ResetController;
use App\Http\Controllers\Backend\Auth\RegisterController;
use App\Http\Controllers\Backend\Auth\ChangePasswordController;
use App\Http\Controllers\Backend\Auth\LogoutController;
//Import Admin Product Related Stuff
use App\Http\Controllers\Backend\Product\BrandController;
use App\Http\Controllers\Backend\Product\CategoryController;
use App\Http\Controllers\Backend\Product\ProductController;
use App\Http\Controllers\Backend\Product\ProductImageController;
use App\Http\Controllers\Backend\Product\InventoryController;
use App\Http\Controllers\Backend\Product\SupplierController;
//Import Admin Transaction Stuff
use App\Http\Controllers\Backend\Transaction\ChatController;
use App\Http\Controllers\Backend\Transaction\OrderController;
use App\Http\Controllers\Backend\Transaction\PostController;
use App\Http\Controllers\Backend\Reports\AnalyticsController;
use App\Http\Controllers\Backend\Reports\ReportController;
use App\Http\Controllers\Backend\Users\CustomerController;
use App\Http\Controllers\Backend\Users\RoleController;
use App\Http\Controllers\Backend\Users\UsersController;
use App\Http\Controllers\Backend\Users\PermissionController;

//Import Customer Page(About Us, Frequently Asked Question, Contact Page)
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\Transaction\ContactController;
//Import Customer Account Controller
use App\Http\Controllers\Frontend\Auth\CustomerProfileController;
use App\Http\Controllers\Frontend\Auth\CustomerResetController;
use App\Http\Controllers\Frontend\Auth\CustomerDataController;
use App\Http\Controllers\Frontend\Auth\CustomerLoginController;
use App\Http\Controllers\Frontend\Auth\CustomerRegisterController;
use App\Http\Controllers\Frontend\Auth\CustomerLogoutController;

//Import Customer Product and Cart
use App\Http\Controllers\Frontend\Cart\CartController;
use App\Http\Controllers\Frontend\Cart\ProductCatalogController;


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
    Route::get('/shippingdelivery', [PageController::class,'shipping'])->name('shipping');
    Route::get('/returnexchanges', [PageController::class,'return'])->name('return');
    Route::get('/productcatalog', [ProductCatalogController::class,'index'])->name('product');
    Route::get('/productcatalog/{product:name}', [ProductCatalogController::class,'show'])->name('productshow');
    Route::get('/product/cart');

    Route::middleware(['guest:customer'])->group(function () {
        Route::resource('CLogin', CustomerLoginController::class)->only(['index','store']);
        Route::resource('CRegister', CustomerRegisterController::class)->only(['index','store']);
        Route::resource('resetcustomer', CustomerResetController::class)->only(['index','store']);
        Route::get('resetcustomer/password/{token}', [CustomerResetController::class, 'ShowResetForm'])->name('customer.reset.password.form');
        Route::post('resetcustomer/password',[CustomerResetController::class,'ResetPassword'])->name('customer.reset.password');
    });

    Route::middleware(['auth:customer'])->group(function () {
        Route::resource('cart', CartController::class)->only(['index','store']);
        Route::post('/product/cart/', [CartController::class,'addToCart']);
        Route::resource('wishlist', WishlistController::class)->only(['index','store']);
        Route::get('/CLogout', [CustomerLogoutController::class, 'store'])->name('CLogout');
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
        });
    });
});

//Dark Mode Switcher Route
Route::get('dark-mode-switcher', [DarkModeController::class, 'switch'])->name('dark-mode-switcher');
//Color Mode Switcher Route
Route::get('color-scheme-switcher/{color_scheme}', [ColorSchemeController::class, 'switch'])->name('color-scheme-switcher');

Route::group(['prefix' => 'admin'],function(){
    Route::middleware(['guest:web','PreventBackHistory'])->group(function () {
        Route::resource('login', LoginController::class)->only(['index','store']);
        Route::resource('register', RegisterController::class)->only(['index','store']);
        Route::get('reset/password/{token}', [ResetController::class, 'ShowResetForm'])->name('reset.password.form');
        Route::post('reset/password',[ResetController::class,'ResetPassword'])->name('reset.password');
        Route::resource('reset', ResetController::class)->only(['index','store']);

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
        //Export Files for Supplier
        Route::get('/supplier/excel',[SupplierController::class,'exportsupplierexcel'])->name('exportsupplierexcel');
        Route::get('/supplier/csv',[SupplierController::class,'exportsuppliercsv'])->name('exportsuppliercsv');
        Route::get('/supplier/html',[SupplierController::class,'exportsupplierhtml'])->name('exportsupplierhtml');
        Route::get('/supplier/pdf',[SupplierController::class,'exportsupplierpdf'])->name('exportsupplierpdf');
        //Export Files for Role
        Route::get('/role/excel',[RoleController::class,'exportroleexcel'])->name('exportroleexcel');
        Route::get('/role/csv',[RoleController::class,'exportrolecsv'])->name('exportrolecsv');
        Route::get('/role/html',[RoleController::class,'exportrolehtml'])->name('exportrolehtml');
        Route::get('/role/pdf',[RoleController::class,'exportrolepdf'])->name('exportrolepdf');

        Route::middleware(['PreventBackHistory'])->group(function () {
            Route::get('/logout', [LogoutController::class, 'store'])->name('logout');
            Route::resource('dashboard', DashboardController::class)->only(['index']);
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
            Route::get('/supplier/archive', [SupplierController::class,'SupplierArchiveIndex'])->name('SupplierArchiveIndex');
            Route::resource('supplier', SupplierController::class);
            Route::get('/profile/changepassword', [ProfileController::class,'changepass'])->name('AdminChangePass');
            Route::post('/profile/changepassword', [ProfileController::class,'resetpass']);
            Route::resource('profile', ProfileController::class)->only('index');
            Route::resource('changepassword', ChangePasswordController::class)->only('index');
            Route::resource('analytics', AnalyticsController::class)->only('index');
            Route::resource('report', ReportController::class);
            Route::resource('customer', CustomerController::class)->only('index');
            Route::resource('user', UsersController::class);
            Route::resource('role', RoleController::class)->only('index');
            Route::resource('permission', PermissionController::class)->only('index');
        });
    });
});
