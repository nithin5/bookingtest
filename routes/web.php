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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'GalleryController@index');
Route::resource('gallery', 'GalleryController');
Route::resource('photo', 'PhotoController');
Route::get('/gallery/show/{id}', 'GalleryController@show');
Route::get('/photo/details/{id}', 'PhotoController@details');
Route::get('services', 'BookingController@services');
Route::get('payments', 'BookingController@payments');
Route::get('requests', 'BookingController@requests');
//Route::post('requests', 'BookingController@requests');
Route::post('/requestupdate', 'BookingController@request_update');
Route::post('/serviceupdate', 'BookingController@service_update');
Route::post('/payupdate', 'BookingController@payment_update');