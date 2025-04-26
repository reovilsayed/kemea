<?php

use App\Http\Controllers\Agent\BoostController;
use App\Http\Controllers\Agent\PageController;
use App\Http\Controllers\Agent\ScheduleController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\OfficeProfileController;
use App\Http\Controllers\PropertyController;
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

Route::get('/',[PageController::class,'dashbaord'] )->name('dashboard');

Route::get('create-page-two/{property}', [PageController::class, 'propertyCreatePageTwo'])->name('property_create_page_two');
Route::get('create-page-third/{property}', [PageController::class, 'propertyCreatePageThird'])->name('property_create_page_third');
Route::post('createPage-two/{property}', [PropertyController::class, 'create_page_two'])->name('properties.createPage_two');
Route::post('createPage-third/{property}', [PropertyController::class, 'createPage_third'])->name('properties.createPage_third');
Route::resource('properties', PropertyController::class);

Route::get('property/edit-page-two/{property}', [PageController::class, 'propertyEditPageTwo'])->name('property_edit_page_two');
Route::get('property/edit-page-third/{property}', [PageController::class, 'propertyEditPageThird'])->name('property_edit_page_third');
Route::post('property/update-page-two/{property}', [PropertyController::class, 'update_page_two'])->name('propertie_update_page_two');
Route::post('property/update-page-third/{property}', [PropertyController::class, 'update_page_third'])->name('propertie_update_page_third');

Route::get('virtual-staging-services',[PageController::class,'virtualService'])->name('virtual.service');
Route::get('visibilities',[PageController::class,'visibilities'])->name('visibilities');
Route::get('shared-search',[PageController::class,'sharedSearch'])->name('shared.search');
Route::get('shared-properties',[PageController::class,'sharedProperties'])->name('shared.properties');

Route::get('plan-management',[PageController::class,'planManagement'])->name('plan.management');
Route::get('affiliate',[PageController::class,'affiliate'])->name('affiliate');

Route::get('/invoices',[PageController::class,'invoices'])->name('invoices');
Route::get('office-profile',[PageController::class,'officeProfile'])->name('office.profile');
Route::get('/team_management',[PageController::class,'teamManagement'])->name('team.management');
Route::get('tour-reservation',[PageController::class,'tourReservation'])->name('tour.reservation');
Route::post('schedule-store',[ScheduleController::class,'store'])->name('schedule.store');
Route::post('boost-store',[BoostController::class,'store'])->name('boost.store');
Route::get('messages/{id?}',[MessageController::class,'messages'])->name('messages');
Route::post('subscribe/{plan}',[SubscriptionController::class,'subscription'])->name('subscribe');

Route::get('office_profile', [OfficeProfileController::class,'officeProfill'])->name('officeProfile');
Route::post('profile_usdateOrCreate',[OfficeProfileController::class,'officeProfile_store'])->name('officeProfile_store');
