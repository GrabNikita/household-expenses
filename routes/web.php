<?php

use App\Http\Controllers;
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

Route::get('/', function () {
    return view('index');
})->name('index');

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::resource('markets', Controllers\MarketController::class);
    Route::resource('manufacturers', Controllers\ManufacturerController::class);
    Route::resource('basket-items', Controllers\BasketItemController::class);
    Route::resource('products', Controllers\ProductController::class);
    Route::resource('baskets', Controllers\BasketController::class);
    Route::resource('receipts', Controllers\ReceiptController::class);
    Route::resource('receipt-items', Controllers\ReceiptItemController::class)->except([
        'index', 'show', 'create', 'edit']);
});
