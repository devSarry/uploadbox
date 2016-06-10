<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'AdminController@index');


// Authentication routes...
/*Route::get('admin/login', 'Auth\AuthController@getLogin');
Route::post('admin/login', 'Auth\AuthController@postLogin');
Route::get('admin/logout', 'Auth\AuthController@getLogout');*/

// Registration routes...
/*Route::get('admin/register', 'Auth\AuthController@getRegister');
Route::post('admin/register', 'Auth\AuthController@postRegister');*/

/*Route::get('admin', 'AdminController@index');*/

//Service Items
/*Route::resource('admin/services', 'ServiceController');*/


//Edit page
//Route::resource('admin/edit/header');
Route::resource('photos', PhotosController::class);
Route::get('photos/{id}/delete' , 'PhotosController@deleteTempPhoto');

Route::group(['middleware' => ['web']], function () {

    // Authentication
    Route::group(['middleware' => 'guest'], function () {
        Route::get('login', 'Auth\AuthController@getLogin');
        Route::post('login', 'Auth\AuthController@postLogin');

    });

    // Dashboard
    Route::group(['middleware' => 'auth'], function () {
        Route::get('dashboard', 'AdminController@index');
        // Portfolio Posts admin
        Route::resource('portfolios', 'PortfolioController');
        Route::put('portfolios/{id}/publish', 'PortfolioController@publish');

/*        // services admin
        Route::resource('services', 'ServiceController');

        // Settings admin
        Route::get('settings', 'AdminController@setting');
        Route::post('settings/profile', 'AdminController@profile');
        Route::post('settings/view', 'AdminController@view');
        Route::post('settings/link', 'AdminController@link');
        Route::post('settings/friend', 'AdminController@friend');
        Route::post('settings/auth', 'AdminController@auth');*/

        Route::get('logout', 'Auth\AuthController@getLogout');
    });


});