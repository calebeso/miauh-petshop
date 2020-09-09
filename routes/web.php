<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

//Dashboard home
Route::get('/home', 'HomeController@index')->name('home');

//Register User 
Route::group(array('middleware' => ['auth', 'can:manage-user']), function () {
    Route::get('/register', 'Auth\RegisterController@index')->name('register');
    Route::post('/register', 'Auth\RegisterController@create')->name('register.submit');
});

//Admin Routes
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-user')->group(function () {
    Route::resource('/users', 'UsersController', ['except' => ['show', 'create', 'store']]);
});
