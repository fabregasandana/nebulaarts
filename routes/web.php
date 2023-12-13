<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('user.home');
});

Route::get('/index', [SaleController::class, 'index'])->name('index');
Route::get('/sale/create', [SaleController::class, 'sale']);
Route::post('/sale', [SaleController::class, 'db']);
Route::get('cart', [SaleController::class, 'cart'])->name('cart');
Route::get('/admin/{id}/edit', [SaleController::class, 'new'])->name('new');
Route::put('/edit/{id}', [SaleController::class, 'update']);
Route::delete('/delete/{id}', [SaleController::class, 'delete']);
Route::get('add-to-cart/{id}', [SaleController::class, 'addToCart'])->name('add_to_cart');



Auth::routes();


Route::middleware('auth')->group(function(){
Route::get('/account', [UserController::class, 'index'])->name('user.index');
});

Route::middleware(['auth', 'auth.admin'])->group(function(){
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
});