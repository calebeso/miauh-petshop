<?php

use App\Model\Animal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Model\Product;
use App\Model\Category;
use App\Model\Service;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// TO DO USER REQUEST
Route::get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', 'Auth\RegisterController@register');

Route::get('products', function() {
    return Product::all();
});
 
Route::get('products/{id}', function($id) {
    return Product::find($id);
});

Route::post('products', function(Request $request) {
    return Product::create($request->all);
});

Route::put('products/{id}', function(Request $request, $id) {
    $product = Product::findOrFail($id);
    $product->update($request->all());

    return $product;
});

Route::delete('products/{id}', function($id) {
    Product::find($id)->delete();

    return 204;
});

Route::get('categories', function() {
    return Category::all();
});
 
Route::get('categories/{id}', function($id) {
    return Category::find($id);
});

Route::post('categories', function(Request $request) {
    return Category::create($request->all);
});

Route::put('categories/{id}', function(Request $request, $id) {
    $product = Category::findOrFail($id);
    $product->update($request->all());

    return $product;
});

Route::delete('categories/{id}', function($id) {
    Category::find($id)->delete();

    return 204;
});

// Services API routes 

Route::get('services', function() {
    return Service::all();
});
 
Route::get('services/{id}', function($id) {
    return Service::find($id);
});

Route::post('services', function(Request $request) {
    return Service::create($request->all);
});

Route::put('services/{id}', function(Request $request, $id) {
    $product = Service::findOrFail($id);
    $product->update($request->all());

    return $product;
});

Route::delete('services/{id}', function($id) {
    Service::find($id)->delete();

    return 204;
});

//Animals API routes
Route::get('animals', function() {
    return Animal::all();
});
 
Route::get('animals/{id}', function($id) {
    return Animal::find($id);
});

Route::post('animals', function(Request $request) {
    return Animal::create($request->all);
});

Route::put('animals/{id}', function(Request $request, $id) {
    $animal = Animal::findOrFail($id);
    $animal->update($request->all());

    return $animal;
});

Route::delete('animals/{id}', function($id) {
    Animal::find($id)->delete();

    return 204;
});
