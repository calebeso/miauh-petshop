<?php

use App\Http\Controllers\Admin\UsersController;
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
    Route::resource('/categories', 'CategoryController');
    Route::resource('/products', 'ProductController');
    Route::get('/usuarios-bloqueados', 'UsersController@listBlockedUsers')->name('blocked-users');
    Route::get('/usuarios-bloqueados/{id}', 'UsersController@restoreBlockedUsers')->name('restore-users');
});

//Service Routes
Route::namespace('Services')->prefix('service')->name('service.')->group(function() {
    Route::get('/servicos', 'ServicesController@index')->name('list-services');
    Route::get('/cadastrar-servico', 'ServicesController@create')->name('create-service');
    Route::post('/servicos', 'ServicesController@store')->name('store');
    Route::delete('/servicos/{id}', 'ServicesController@destroy')->name('delete');
    Route::get('/editar-servico/{service}', 'ServicesController@edit')->name('edit');
    Route::put('/editar-servico/{service}', 'ServicesController@update')->name('update');
});