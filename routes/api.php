<?php

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;

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

Route::get('/banners','BannerController@index');

Route::get('/brands','BrandController@index');
Route::post('/brands','BrandController@store');

Route::get('/categories','CategoryController@index');
Route::post('/categories','CategoryController@store');

Route::get('/colors','ColorController@index');
Route::post('/colors','ColorController@store');


Route::get('/sizes','SizeController@index');

Route::get('/travels','TravelController@index');

Route::get('/type_clothes','TypeClotheController@index');

Route::get('/Wholesellers','WholesellerController@index');

Route::get('/customers','CustomerController@index');

Route::get('/employees','EmployeeController@index');

Route::get('/materials','MaterialController@index');

Route::get('/model_offerts/{id}','ModelOffertController@show');

Route::get('/clothes/{id}','ClotheController@show');

Route::get('/clothe_models','ClotheModelController@index');
Route::post('/clothe_models','ClotheModelController@store');

Route::post('/model_pictures','ModelPictureController@store');

Route::post('/clothe_pictures','ClothePictureController@store');

Route::get('/purchases','PurchaseController@index');

Route::get('/purchase_details/{id}','PurchaseDetailController@show');

Route::get('/sales','SaleController@index');

Route::get('/sale_details/{id}','SaleDetailController@show');




