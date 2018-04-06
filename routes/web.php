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

// Guest Routes
Route::get('/', function () {
    return view('landingpage');
});
Route::get('/signupartist', function () {
    return view('signupartist');
});
Route::get('/signupfan', function () {
    return view('signupfan');
});

Route::post('/register', 'HomeController@register');
Route::post('/login', 'HomeController@login');

// TODO - Profile Edit Capabilities
// TODO - Error Logic

// After Logging In
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile/{id}', 'HomeController@viewProfile')->name('profile');
Route::get('/favorite/{senderId}/{receiverId}', 'HomeController@addRelationship');
Route::get('/connect/{receiverId}', 'HomeController@addRelationship');
Route::get('/logout', 'HomeController@logout');
