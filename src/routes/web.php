<?php

use App\Http\Controllers\ReadXmlController;
use App\Http\Controllers\ProductsController;
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

Route::any('upload-xml', [ReadXmlController::class, 'upload'])->name('xml-upload');

Route::any('/', [ProductsController::class, 'search'])->name('home');
Route::get('/products/{product}', [ProductsController::class, 'show'])->name('products.show');
