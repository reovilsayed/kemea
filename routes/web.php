<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\SubscriptionController;
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
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('message/store/{id}', [MessageController::class, 'store'])->middleware('auth')->name('message.store');

Route::post('/paypal/order', [SubscriptionController::class, 'createOrder'])->name('paypal.order');
Route::post('/paypal/order/{order}/capture', [SubscriptionController::class, 'captureOrder'])->name('paypal.capture');