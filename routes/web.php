<?php

use App\Http\Controllers\CustomerController;
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

Auth::routes();

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




    // BOOKING CONTROLLER
    Route::middleware(['auth:sanctum', 'verified'])->group(function () {
        // INDEX
        Route::middleware(['auth:sanctum', 'verified'])->get('/zworktechnology/customer', [CustomerController::class, 'index'])->name('customer.index');
        // CREATE
        Route::middleware(['auth:sanctum', 'verified'])->get('/zworktechnology/customer/create', [CustomerController::class, 'create'])->name('customer.create');
        // STORE
        Route::middleware(['auth:sanctum', 'verified'])->post('/zworktechnology/customer/store', [CustomerController::class, 'store'])->name('customer.store');
        // EDIT
        Route::middleware(['auth:sanctum', 'verified'])->get('/zworktechnology/customer/edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
        // UPDATE
        Route::middleware(['auth:sanctum', 'verified'])->put('/zworktechnology/customer/update/{id}', [CustomerController::class, 'update'])->name('customer.update');
        // PAYMENT
        Route::middleware(['auth:sanctum', 'verified'])->get('/zworktechnology/customer/payment/{customerid}/{planamount}', [CustomerController::class, 'payment'])->name('customer.payment');
    });

});



Route::post('/payment_request', [CustomerController::class, 'payment_request']);
Route::post('/paymentverify', [CustomerController::class, 'paymentverify'])->name('customer.paymentverify');

