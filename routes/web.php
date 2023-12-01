<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\backend\RoleController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\backend\ContactController;
use App\Http\Controllers\backend\ServiceController;
use App\Http\Controllers\backend\DashboardController;
// use Mcamara\LaravelLocalization\LaravelLocalization;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


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



Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::group(['prefix' => 'app'],function(){
        Route::get('permissions/{id}',[RoleController::class,'edit'])->name('permissions');
        // Route::put('permissions/{id}',[RoleController::class,'edit'])->name('permissions');
        Route::resource('roles', RoleController::class);
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');   
        //admins
        Route::get('admins', [UserController::class, 'indexAdmins'])->name('app.admins.index');
        Route::post('admins', [UserController::class, 'storeAdmin'])->name('app.admins.store');
        Route::delete('admins/{id}', [UserController::class, 'deleteAdmin'])->name('app.admins.delete');
        Route::put('admins/{id}', [UserController::class, 'updateAdmin'])->name('app.admins.update');
        //Contacts
        Route::get('contacts',[ContactController::class, 'index'])->name('contacts');
        Route::delete('contacts/delete/{id}',[ContactController::class,'destroy'])->name('contact.destroy');
        Route::get('all_contacts',[ContactController::class,'all_Contacts'])->name('all_Contacts');
        //Services
        Route::get('services',[ServiceController::class,'index'])->name('services');
        Route::get('service/{id}/edit',[ServiceController::class,'edit'])->name('service.edit');
        Route::post('service/store',[ServiceController::class,'store'])->name('service.store');
        Route::put('service/{id}/update',[ServiceController::class,'update'])->name('service.update');
        Route::delete('service/{id}/delete',[ServiceController::class,'destroy'])->name('service.destroy');
        Route::get('all_services',[ServiceController::class,'all_services_search'])->name('all_services');
        Route::get('services/create',[ServiceController::class,'create'])->name('service.create');
        Route::post('service/image-upload',[ServiceController::class,'storeImage'])->name('image.upload');
    });
});




Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

    Route::get('/',[HomeController::class,'home'])->name('home');
    Route::get('/dental',[HomeController::class,'dental'])->name('dental');
    Route::get('/eyesurgery',[HomeController::class,'eye'])->name('eye');
    Route::get('/hairtransplant',[HomeController::class,'hair'])->name('hair');
    Route::get('/knee-replacement',[HomeController::class,'knee'])->name('knee');
    Route::get('/orthopaetic',[HomeController::class,'orthopaetic'])->name('orthopaetic');
    Route::get('/shoulder',[HomeController::class,'shoulder'])->name('shoulder');
    
 
});
   //language changer
//    Route::get('locale/{lange}', [LocalizationController::class ,'setLang'])->name('setLang');
    Route::post('contact/send',[ContactController::class,'store'])->name('contact.store');
