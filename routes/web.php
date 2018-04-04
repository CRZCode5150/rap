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
    return view('landingpage');
});

Route::get('/signupartist', function () {
    return view('signupartist');
});

Route::get('/signupfan', function () {
    return view('signupfan');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/home', function () {
    return view('home');
});

Route::post('/register', 'HomeController@register');

Route::get('/home', 'HomeController@index')->name('home');