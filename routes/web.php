<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
<<<<<<< Updated upstream
use App\Http\Controllers\UserController;


=======
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\AdidasController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\NikeController;
use App\Http\Middleware\Controllers\MenShoeController;
>>>>>>> Stashed changes
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/login', [CustomerController::class, 'login'])->name('login.customer');

Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'check_login']);
Route::get('/admin/register', [AdminController::class, 'register'])->name('admin.register');
Route::post('/admin/register', [AdminController::class, 'check_register']);
Route::get('/admin/upload', [AdminController::class, 'upload'])->name('admin.upload');
Route::post('/admin/upload', [AdminController::class, 'check_upload']);
Route::get('/admin/change_pass', [AdminController::class, 'change_pass'])->name('admin.change_pass');
Route::post('/admin/change_pass', [AdminController::class, 'check_pass']);
Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

    
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::resources([
        'category' => CategoryController::class,
        'product' => ProductController::class,
        'brand' => BrandController::class,
        'user' => UserController::class,
        'customer' => CustomerController::class,
        'order' => OrderController::class,
    ]);
    
});
<<<<<<< Updated upstream
=======
Route::get('/customer/index', [CustomerController::class, 'index'])->name('Customer.index');

Route::get('/adidas', 'CustomerController@adidas')->name('customer.adidas');
Route::group(['prefix' => 'customer'], function(){
    Route::get('/', [CustomerController::class, 'index'])->name('Customer.adidas');
    Route::resources([
        'adidas' => AdidasController::class,
       
    ]);

    Route::get('/contact', [CustomerController::class, 'contact'])->name('customer.contact');
    route::get('/about',[CustomerController::class,'about'])->name('customer.about');

    Route::get('/cap-nhat-thong-tin/{userID}', [CustomerController::class, 'edit'])->name('cap-nhat-thong-tin');
    Route::post('/cap-nhat-thong-tin/{userID}', [CustomerController::class, 'update']);
    
     // Route to display the login form
    Route::get('/customer/login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');

    // Route to handle the login process
    Route::post('/login', [LoginController::class, 'login']);


    Route::get('/nike', [CustomerController::class, 'index'])->name('customer.nike');
    Route::group(['prefix' => 'customer'], function(){
    Route::get('/', [CustomerController::class, 'index'])->name('customer.index');
    Route::get('/nike')->name('customer.nike');
});
    Route::get('/customer/men-shoe')->name('customer.men.shoe');
});



>>>>>>> Stashed changes

