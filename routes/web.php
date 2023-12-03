<?php

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
    return view('welcome');
})->middleware(['verify.shopify'])->name('home');

/*
|--------------------------------------------------------------------------
| Shop Route
|--------------------------------------------------------------------------
*/
Route::get('/shop', function () { return view('shop'); })->middleware(['verify.shopify'])->name('shop');

/*
|--------------------------------------------------------------------------
| Collections Route
|--------------------------------------------------------------------------
*/
Route::get('/collections', [\App\Http\Controllers\CollectionController::class, 'collectionIndex'])->middleware(['verify.shopify'])->name('collection.index');
Route::post('/collections', [\App\Http\Controllers\CollectionController::class, 'collectionSave'])->middleware(['verify.shopify'])->name('collection.save');

/*
|--------------------------------------------------------------------------
| Product Route
|--------------------------------------------------------------------------
*/
Route::get('/product/{collection_id}', [\App\Http\Controllers\ProductController::class, 'products'])->middleware(['verify.shopify'])->name('collection.products');
Route::post('/product/{collection_id}', [\App\Http\Controllers\ProductController::class, 'products'])->middleware(['verify.shopify'])->name('collection.product.save');
