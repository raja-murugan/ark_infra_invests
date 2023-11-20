<?php

use App\Http\Controllers\PaymentController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PlotController;
use App\Http\Controllers\ReferenceController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\VisitorController;
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
Route::get('/', [FrontendController::class, 'welcome'])->name('welcome');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/benefits', [FrontendController::class, 'benefits'])->name('benefits');
Route::get('/amenities', [FrontendController::class, 'amenities'])->name('amenities');
Route::get('/gallery', [FrontendController::class, 'gallery'])->name('gallery');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');

Auth::routes();

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // BOOKING CONTROLLER
    Route::middleware(['auth:sanctum', 'verified'])->group(function () {
        // INDEX
        Route::middleware(['auth:sanctum', 'verified'])->get('/zworktech-eraivannagar/booking', [BookingController::class, 'index'])->name('booking.index');
        // CREATE
        Route::middleware(['auth:sanctum', 'verified'])->get('/zworktech-eraivannagar/booking/create', [BookingController::class, 'create'])->name('booking.create');
        // STORE
        Route::middleware(['auth:sanctum', 'verified'])->post('/zworktech-eraivannagar/booking/store', [BookingController::class, 'store'])->name('booking.store');
        // EDIT
        Route::middleware(['auth:sanctum', 'verified'])->get('/zworktech-eraivannagar/booking/edit/{unique_key}', [BookingController::class, 'edit'])->name('booking.edit');
        // UPDATE
        Route::middleware(['auth:sanctum', 'verified'])->put('/zworktech-eraivannagar/booking/update/{unique_key}', [BookingController::class, 'update'])->name('booking.update');
        // DELETE
        Route::middleware(['auth:sanctum', 'verified'])->put('/zworktech-eraivannagar/booking/delete/{unique_key}', [BookingController::class, 'delete'])->name('booking.delete');
        // DATAE FILTER
        Route::middleware(['auth:sanctum', 'verified'])->put('/zworktech-eraivannagar/booking/datefilter', [BookingController::class, 'datefilter'])->name('booking.datefilter');
        // PAYMENT
        Route::middleware(['auth:sanctum', 'verified'])->get('/zworktech-eraivannagar/booking/payment/{plotid}/{booking_id}', [BookingController::class, 'payment'])->name('booking.payment');
        // PAYMENT STORE
        Route::middleware(['auth:sanctum', 'verified'])->post('/zworktech-eraivannagar/booking/paymentstore', [BookingController::class, 'paymentstore'])->name('booking.paymentstore');
        // INDEX
        Route::middleware(['auth:sanctum', 'verified'])->get('/zworktech-eraivannagar/payment_receipt', [BookingController::class, 'payment_receipt'])->name('booking.payment_receipt');
        // DATAE FILTER
        Route::middleware(['auth:sanctum', 'verified'])->put('/zworktech-eraivannagar/booking/receiptdatefilter', [BookingController::class, 'receiptdatefilter'])->name('booking.receiptdatefilter');
        // PRINT
        Route::middleware(['auth:sanctum', 'verified'])->get('/zworktech-eraivannagar/booking/recept_print/{unique_key}', [BookingController::class, 'recept_print'])->name('booking.recept_print');
        // PRINT
        Route::middleware(['auth:sanctum', 'verified'])->get('/zworktech-eraivannagar/booking/receptcash_print/{unique_key}', [BookingController::class, 'receptcash_print'])->name('booking.receptcash_print');
        // DELETE
        Route::middleware(['auth:sanctum', 'verified'])->put('/zworktech-eraivannagar/booking/receipt_delete/{unique_key}', [BookingController::class, 'receipt_delete'])->name('booking.receipt_delete');
        // EDIT
        Route::middleware(['auth:sanctum', 'verified'])->get('/zworktech-eraivannagar/booking/recept_edit/{unique_key}', [BookingController::class, 'recept_edit'])->name('booking.recept_edit');
        // UPDATE
        Route::middleware(['auth:sanctum', 'verified'])->put('/zworktech-eraivannagar/booking/recept_update/{unique_key}', [BookingController::class, 'recept_update'])->name('booking.recept_update');
        // CREATE
        Route::middleware(['auth:sanctum', 'verified'])->get('/zworktech-eraivannagar/booking/payment_create', [BookingController::class, 'payment_create'])->name('booking.payment_create');
        // PAYMENT STORE
        Route::middleware(['auth:sanctum', 'verified'])->post('/zworktech-eraivannagar/booking/payment_store', [BookingController::class, 'payment_store'])->name('booking.payment_store');
    });

    Route::middleware(['auth:sanctum', 'verified'])->group(function () {
        // INDEX
        Route::middleware(['auth:sanctum', 'verified'])->get('/zworktech-eraivannagar/plot', [PlotController::class, 'index'])->name('plot.index');
        // STORE
        Route::middleware(['auth:sanctum', 'verified'])->post('/zworktech-eraivannagar/plot/store', [PlotController::class, 'store'])->name('plot.store');
        // EDIT
        Route::middleware(['auth:sanctum', 'verified'])->post('/zworktech-eraivannagar/plot/edit/{unique_key}', [PlotController::class, 'edit'])->name('plot.edit');
        // DELETE
        Route::middleware(['auth:sanctum', 'verified'])->put('/zworktech-eraivannagar/plot/delete/{unique_key}', [PlotController::class, 'delete'])->name('plot.delete');
        // DELETE
        Route::middleware(['auth:sanctum', 'verified'])->put('/zworktech-eraivannagar/plot/status_update/{unique_key}', [PlotController::class, 'status_update'])->name('plot.status_update');
        // DELETE
        Route::middleware(['auth:sanctum', 'verified'])->put('/zworktech-eraivannagar/plot/status_update_edit/{unique_key}', [PlotController::class, 'status_update_edit'])->name('plot.status_update_edit');
    });

    Route::middleware(['auth:sanctum', 'verified'])->group(function () {
        // INDEX
        Route::middleware(['auth:sanctum', 'verified'])->get('/zworktech-eraivannagar/reference', [ReferenceController::class, 'index'])->name('reference.index');
        // STORE
        Route::middleware(['auth:sanctum', 'verified'])->post('/zworktech-eraivannagar/reference/store', [ReferenceController::class, 'store'])->name('reference.store');
        // EDIT
        Route::middleware(['auth:sanctum', 'verified'])->post('/zworktech-eraivannagar/reference/edit/{unique_key}', [ReferenceController::class, 'edit'])->name('reference.edit');
        // DELETE
        Route::middleware(['auth:sanctum', 'verified'])->put('/zworktech-eraivannagar/reference/delete/{unique_key}', [ReferenceController::class, 'delete'])->name('reference.delete');
    });

    Route::middleware(['auth:sanctum', 'verified'])->group(function () {
        // INDEX
        Route::middleware(['auth:sanctum', 'verified'])->get('/zworktech-eraivannagar/payment', [PaymentController::class, 'index'])->name('payment.index');
        // STORE
        Route::middleware(['auth:sanctum', 'verified'])->post('/zworktech-eraivannagar/payment/store', [PaymentController::class, 'store'])->name('payment.store');
        // EDIT
        Route::middleware(['auth:sanctum', 'verified'])->post('/zworktech-eraivannagar/payment/edit/{unique_key}', [PaymentController::class, 'edit'])->name('payment.edit');
        // DELETE
        Route::middleware(['auth:sanctum', 'verified'])->put('/zworktech-eraivannagar/payment/delete/{unique_key}', [PaymentController::class, 'delete'])->name('payment.delete');
    });


    Route::middleware(['auth:sanctum', 'verified'])->group(function () {
        // INDEX
        Route::middleware(['auth:sanctum', 'verified'])->get('/zworktech-eraivannagar/expense', [ExpenseController::class, 'index'])->name('expense.index');
        // STORE
        Route::middleware(['auth:sanctum', 'verified'])->post('/zworktech-eraivannagar/expense/store', [ExpenseController::class, 'store'])->name('expense.store');
        // EDIT
        Route::middleware(['auth:sanctum', 'verified'])->post('/zworktech-eraivannagar/expense/edit/{unique_key}', [ExpenseController::class, 'edit'])->name('expense.edit');
        // DELETE
        Route::middleware(['auth:sanctum', 'verified'])->put('/zworktech-eraivannagar/expense/delete/{unique_key}', [ExpenseController::class, 'delete'])->name('expense.delete');
    });


    Route::middleware(['auth:sanctum', 'verified'])->group(function () {
        // INDEX
        Route::middleware(['auth:sanctum', 'verified'])->get('/zworktech-eraivannagar/visitor', [VisitorController::class, 'index'])->name('visitor.index');
        // STORE
        Route::middleware(['auth:sanctum', 'verified'])->post('/zworktech-eraivannagar/visitor/store', [VisitorController::class, 'store'])->name('visitor.store');
        // EDIT
        Route::middleware(['auth:sanctum', 'verified'])->post('/zworktech-eraivannagar/visitor/edit/{unique_key}', [VisitorController::class, 'edit'])->name('visitor.edit');
        // DELETE
        Route::middleware(['auth:sanctum', 'verified'])->put('/zworktech-eraivannagar/visitor/delete/{unique_key}', [VisitorController::class, 'delete'])->name('visitor.delete');
    });


    Route::middleware(['auth:sanctum', 'verified'])->group(function () {
        // INDEX
        Route::middleware(['auth:sanctum', 'verified'])->get('/zworktech-eraivannagar/contactus', [ContactController::class, 'index'])->name('contactus.index');
    });
});



Route::get('/Getplots', [PlotController::class, 'Getplots']);
Route::get('/Getplotsqarefeet', [PlotController::class, 'Getplotsqarefeet']);
Route::get('/plotsforPayment', [PlotController::class, 'plotsforPayment']);
Route::get('/GetPlotsBookedDetails', [PlotController::class, 'GetPlotsBookedDetails']);
