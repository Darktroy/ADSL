<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
 * 
 * 
 * 
| JAN 13
 * 
 * 
 * 
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
    Route::get('/','frontController@index');
    Route::get('/show-offer/{id}','frontController@show');
//});

Route::get('/test', function () {
    return view('crm.Master');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/crm/add-article','crmController@addArticle');
    Route::get('/crm/add-provider','crmController@providerForm');
    Route::get('/crm/add-offer','crmController@offerForm');
    Route::get('/crm/add-feature','crmController@offerfeatureform');
    
  
    
    Route::post('/crm/add-article','crmController@createArticle');
    Route::post('/crm/add-provider','crmController@createProvider');
    Route::post('/crm/add-offer','crmController@createOffer');
    Route::post('/crm/add-feature','crmController@createFeature');
    
    Route::resource('/crm','crmController');
});
