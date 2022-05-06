<?php

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
Route::get('/home', function () {
    return view('pages.home');
});
Route::get('/about', function () {
    return view('pages.aboutpage');
});
Route::get('/service', function () {
    return view('pages.servicepage');
});
Route::get('/pricing', function () {
    return view('pages.pricingpage');
});
Route::get('/contact', function () {
    return view('pages.contactpage');
});

