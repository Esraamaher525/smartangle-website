<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function() {
    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/iraq-in-numbers/list', 'HomeController@iraqInNumbersList')->name('iraqInNumbersList');
    Route::get('/iraq-in-numbers/details/{id}', 'HomeController@iraqInNumbersDetails')->name('iraqInNumbersDetails');
    Route::get('/iraq-in-numbers/download-file/{id}', 'HomeController@downloadFile')->name('downloadFile');
    Route::get('/media/list', 'HomeController@mediaList')->name('mediaList');
    Route::get('/join-form', 'HomeController@joinForm')->name('joinForm');
    Route::post('/store-joining', 'HomeController@storeJoining')->name('store-joining');
});






Route::group(['prefix' => 'admin','middleware' => ['dashboard.language']], function () {
    Voyager::routes();
});
