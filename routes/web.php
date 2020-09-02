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
    
    return view('photomaker/index');
});

Route::group(['prefix'=>'admin'],function()
{
    Route::get('/','adminController@index');
    Route::resource('user','userController');
    Route::resource('services','servicesController');
    Route::resource('slider','sliderController');
    Route::resource('gallery','galleryController');
    Route::resource('contact','contactController');
    Route::resource('about','aboutController');
    Route::resource('customer','customerController');
    Route::resource('data','dataController');
    Route::resource('subscribe','subscribeController');

});

 
Route::resource('/','siteController');

Route::get('photomaker/index','siteController@index');
Route::get('/service','siteController@service');
Route::get('/gallery','siteController@gallery');
Route::get('/contact','siteController@contact');
Route::post('/contact','siteController@store');
Route::get('/about','siteController@about');
Route::post('/contact','siteController@store2');
Route::get('/category','siteController@category');




////////

Route::get('/login','loginController@create');
    Route::post('/login','loginController@store');
    
    Route::get('/logout','loginController@destroy');
