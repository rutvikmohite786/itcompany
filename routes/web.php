<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\WebPageController;


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
Route::get('home', [HomePageController::class, 'index'])->name('home');
Route::controller(WebPageController::class)->group(function () {
    Route::get('/about', 'about')->name('about');
    Route::get('/service', 'service')->name('service');
    Route::get('/pricing', 'pricing')->name('pricing');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/development', 'development')->name('development');
    Route::get('/webservice', 'webservice')->name('webservice');
    Route::get('/allservice', 'allservice')->name('allservice');
    Route::post('/contact/submit', 'contactStore')->name('contact.store');

});

Route::get('/admin', function () {
    return view('pages.admin');
});