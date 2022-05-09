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
Route::get('home', [HomePageController::class, 'index']);
Route::controller(WebPageController::class)->group(function () {
    Route::get('/about', 'about');
    Route::get('/service', 'service');
    Route::get('/pricing', 'pricing');
    Route::get('/contact', 'contact');
});