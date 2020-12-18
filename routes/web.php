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
    Route::get('/usuarios-bloqueados', 'UsersController@listBlockedUsers')->name('blocked-users');
    Route::get('/usuarios-bloqueados/{id}', 'UsersController@restoreBlockedUsers')->name('restore-users');
});

//Products Routes
Route::namespace('Products')->prefix('products')->name('products.')->group(function() {
    Route::get('/products', 'ProductController@index')->name('list-products');
    Route::get('/add-product', 'ProductController@create')->name('create-product');
    Route::post('/products', 'ProductController@store')->name('store');
    Route::delete('/products/{id}', 'ProductController@destroy')->name('delete');
    Route::get('/edit-product/{product}', 'ProductController@edit')->name('edit');
    Route::put('/edit-product/{product}', 'ProductController@update')->name('update');
});

//Categories Routes
Route::namespace('Products')->prefix('categories')->name('categories.')->group(function() {
    Route::get('/categories', 'CategoryController@index')->name('list-categories');
    Route::get('/add-category', 'CategoryController@create')->name('create-category');
    Route::post('/categoies', 'CategoryController@store')->name('store');
    Route::delete('/categoies/{id}', 'CategoryController@destroy')->name('delete');
    Route::get('/edit-category/{category}', 'CategoryController@edit')->name('edit');
    Route::put('/edit-category/{category}', 'CategoryController@update')->name('update');
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

//Costumer Routes
Route::namespace('Costumer')->prefix('costumer')->name('costumer.')->group(function() {
    Route::get('/clientes', 'CostumerController@index')->name('list');
    Route::get('/cadastrar-cliente', 'CostumerController@create')->name('create');
    Route::post('/clientes', 'CostumerController@store')->name('store');
    Route::get('/editar-cliente/{costumer}', 'CostumerController@edit')->name('edit');
    Route::put('/editar-cliente/{costumer}', 'CostumerController@update')->name('update');
    Route::delete('/cliente/{id}', 'CostumerController@destroy')->name('delete');
  
});
  //Animal Routes
Route::namespace('Animal')->prefix('animal')->name('animal.')->group(function(){
    Route::get('/animais', 'AnimalController@index')->name('list');
    Route::get('/cadastrar', 'AnimalController@create')->name('create');
    Route::post('/animais', 'AnimalController@store')->name('store');
    Route::delete('/animais/{id}', 'AnimalController@destroy')->name('delete');
    Route::get('/editar-animal/{animal}', 'AnimalController@edit')->name('edit');
    Route::put('/editar-animal/{animal}', 'AnimalController@update')->name('update');
});

  //Event Routes
  Route::namespace('Event')->prefix('event')->name('event.')->group(function(){
    Route::get('/agenda', 'CalendarController@index')->name('list');
    Route::get('/load-events', 'EventController@loadEvents')->name('routeLoadEvents');
    Route::put('/update-event', 'EventController@update')->name('routeEventUpdate');
});
