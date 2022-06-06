<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryProductController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CompanyCategoryController;
use App\Http\Controllers\OfferController;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//
Route::resource('users', UserController::class);
//
Route::resource('categories', CategoryController::class);
//
Route::resource('invoices', InvoiceController::class);
//
Route::resource('companies', CompanyController::class);
//
Route::resource('customers', CustomerController::class);
//
Route::resource('products', ProductController::class);
//
Route::resource('categoryProducts', CategoryProductController::class);
//
Route::resource('companyCategory', CompanyCategoryController::class);
//
Route::resource('ajaxOffers', OfferController::class);
//
Route::post('delete', [OfferController::class, 'delete'])->name('ajax.offers.delete');
//
Route::post('getCompanyData', [CompanyController::class, 'getCompanyData'])->name('getCompanyData');
//
Route::post('getCustomerData', [CustomerController::class, 'getCustomerData'])->name('getCustomerData');
//
Route::post('getProductsName', [CategoryController::class, 'getProductsName'])->name('getProductsName');
