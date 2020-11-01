<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Model\Product;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', 'Auth\RegisterController@register');

Route::get('products', function() {
    // If the Content-Type and Accept headers are set to 'application/json', 
    // this will return a JSON structure. This will be cleaned up later.
    return Products::all();
});
 
Route::get('products/{id}', function($id) {
    return Products::find($id);
});

Route::post('products', function(Request $request) {
    return Products::create($request->all);
});

Route::put('products/{id}', function(Request $request, $id) {
    $product = Products::findOrFail($id);
    $product->update($request->all());

    return $product;
});

Route::delete('products/{id}', function($id) {
    Products::find($id)->delete();

    return 204;
});