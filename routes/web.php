<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\DonHangController;
use App\Http\Controllers\KHController;
use App\Http\Controllers\SanphamController;
use App\Http\Controllers\shopController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/index',SanphamController::class);

Route::resource('/',UserController::class);
Route::resource('/shop',shopController::class);
Route::resource('/login',KHController::class);
Route::resource('/kh',KHController::class);
Route::resource('/add_to_order',cartController::class);
Route::resource('/cart',cartController::class);

Route::get('/', [UserController::class, 'index'])->name('index');

Route::get('/loaisanpham/{id}', [App\Http\Controllers\ShopController::class, 'loaisanpham'])->name('loaisanpham');

Route::get('/cart/add-to-cart/{MaSP}', [cartController::class, 'save_cart'])->name('add-to-cart');
Route::post('/cart/add-to-cart/{MaSP}', [CartController::class, 'addToCart'])->name('add-to-cart');

Route::post('/cart/add-to-cart/{MaSP}', [CartController::class, 'save_cart'])->name('save-cart');


Route::get('/cart', [cartController::class, 'index'])->name('cart');

Route::get('/checkoutpage', [cartController::class, 'checkout'])->name('checkoutpage');

Route::post('/add_to_order', [cartController::class, 'add_to_order'])->name('add_to_order');


Route::post('/add-to-order', [cartController::class, 'add_to_order'])->name('add_to_order');



Route::get('/login', [UserController::class, 'showLoginForm'])->name('kh.showLoginForm');
Route::get('/forget', [KHController::class, 'showForgetForm'])->name('showforget');
Route::post('/login', [UserController::class, 'login'])->name('kh.login');
Route::post('/dk', [KHController::class, 'DKTC'])->name('KHDK');


Route::get('admin/admin', [SanphamController::class, 'showLoginAdmin'])->name('admin');
Route::post('admin/admin', [SanphamController::class, 'loginAdmin'])->name('loginAdmin');



Route::get('/{MaSP}/edit', [UserController::class, 'edit'])->name('editUser');

Route::get('/shop/{MaSP}/edit', [shopController::class, 'edit'])->name('editshop');

Route::get('/index/{MaSP}/edit', [SanphamController::class, 'edit'])->name('admin.edit');
Route::put('/index/{MaSP}', [SanphamController::class, 'update'])->name('index.update');
Route::delete('/index/{MaSP}', [SanphamController::class, 'destroy'])->name('index.destroy');

Route::get('/kh', [KHController::class, 'index'])->name('kh');
Route::post('/kh/add', [KHController::class, 'create'])->name('add');



Route::get('/kh/{MaKH}/edit', [KHController::class, 'edit'])->name('edit');
Route::put('/kh/{MaKH}', [KHController::class, 'update'])->name('update');
Route::delete('/kh/{MaKH}', [KHController::class, 'destroy'])->name('destroy');



Route::get('/donhang', [DonHangController::class, 'index'])->name('donhang');

Route::get('/search', [UserController::class, 'search'])->name('search');





Route::get('/donhang/{MaHoaDon}/chitiet', [DonHangController::class, 'showDetails'])->name('donhang.chitiet');
