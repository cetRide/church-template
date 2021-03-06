<?php

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
Route::get('/ministries', function () {
    return view('client_side/amenities');
});

Route::get('/', function () {
    return view('client_side/home');
});

Route::get('/about-us', function () {
    return view('client_side/about');
});

Route::get('/contact', function () {
    return view('client_side/contact');
});
