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

Route::get('signup', function () {
    return view('signup');
});

Route::get('ui', function () {
    return view('ui');
});

// test pages VV

Route::get('page1', function () {
    return view('page1');
});

Route::get('index', function () {
    return view('index');
});

Route::get('login', function () {
    return view('login');
});

Route::get('register', function () {
    return view('register');
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
