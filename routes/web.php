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

Route::get('index', function () {
    return view('index');
});

Route::get('login', function () {
    return view('login');
});


//two register
Route::get('landlord_register', function () {
    return view('landlord_register');
});

Route::get('renter_register', function () {
    return view('renter_register');
});

Route::get('listproperty', function () {
    return view('listproperty');
});

Route::get('viewing', function () {
    return view('viewing');
});

Route::get('rentals', function () {
    return view('rentals');
});

Route::get('user', function () {
    return view('user');
});

Route::get('adminpage', function () {
    return view('adminpage');
});

Route::get('addphotos', function () {
    return view('addphotos');
});

Route::get('map', function () {
    return view('map');
});

Route::get('adminmanage', function () {
    return view('adminmanage');
});
