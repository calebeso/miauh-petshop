<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Model\Product;
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