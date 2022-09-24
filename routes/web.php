<?php

use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminRestaurantController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SampleController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/loginadmin', [HomeController::class, 'loginadmin'])->name('loginadmin');
Route::post('/loginadmincheck', [HomeController::class, 'loginadmincheck'])->name('loginadmincheck');
Route::get('/logout', [HomeController::class, 'logout'])->name('logoutuser');
//************** HOME LOGIN AND REGISTER ROUTS **************//
Route::get('/registeruser', [HomeController::class, 'registeruser'])->name('registeruser');
Route::get('/loginuser', [HomeController::class, 'loginuser'])->name('loginuser');
Route::post('/validate_registration', [SampleController::class, 'validate_registration'])->name('sample.validate_registration');
Route::post('/validate_login', [SampleController::class, 'validate_login'])->name('sample.validate_login');

//************** HOME USER RESTAURANT ROUTS **************//
Route::get('/createres', [HomeController::class, 'restaurant'])->name('createres')->middleware('auth');
Route::post('/resstore', [HomeController::class, 'storeeres'])->name('resstore')->middleware('auth');
Route::get('/restSettings', [HomeController::class, 'resSettings'])->name('res.setting')->middleware('auth');
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::get('/pendingpage', [HomeController::class, 'pending'])->name('pendingpage')->middleware('auth');
Route::get('/userDash', [HomeController::class, 'userDash'])->name('userDash')->middleware('auth');


Route::middleware('auth')->group(function () {
//**************ADMIN ROUTES**************
    Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
        Route::get('/', [AdminHomeController::class, 'index'])->name('index');
        //**************ADMIN GENERAL ROUTES**************
        Route::get('/setting', [AdminHomeController::class, 'setting'])->name('setting');
        Route::post('/setting', [AdminHomeController::class, 'settingUpdate'])->name('setting.update');
        Route::get('/dash', [AdminHomeController::class, 'dash'])->name('dash');
        //**************ADMIN CATEGORY ROUTES**************
        Route::prefix('/category')->name('category.')->controller(CategoryController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::get('/delete/{id}', 'delete')->name('delete');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/show/{id}', 'show')->name('show');
        });
        //**************ADMIN product ROUTES**************
        Route::prefix('/product')->name('product.')->controller(ProductController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::get('/delete/{id}', 'delete')->name('delete');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/show/{id}', 'show')->name('show');
        });

        //**************ADMIN user ROUTES**************
        Route::prefix('/user')->name('user.')->controller(AdminUserController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/show/{id}', 'show')->name('show');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::post('/update/{id}', 'update')->name('update');
            Route::post('/addrole/{id}', 'addrole')->name('addrole');
            Route::get('/destroy/{id}', 'destroy')->name('destroy');
            Route::get('/destroyrole/{uid}/{rid}', 'destroyrole')->name('destroyrole');

        });
        //**************ADMIN RESTAURANT ROUTES**************
        Route::prefix('/restaurant')->name('restaurant.')->controller(AdminRestaurantController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('/store', 'store')->name('store');
            Route::post('/', 'update')->name('update');

        });
    });
});


