<?php

use App\Http\Controllers\Agent\PageController;
use App\Http\Controllers\PropertieController;
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

Route::get('/',[PageController::class,'dashbaord'] )->name('dashboard');

Route::get('properties/create-page-two', [PageController::class, 'propertyCreatePageTwo'])->name('property_create_page_two');

Route::resource('properties', PropertieController::class);



