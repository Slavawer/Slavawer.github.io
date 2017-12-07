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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route:: get('/','IndexController@index')->name('return');
Route:: get('article/{id}','IndexController@page')->name('articlePage');
Route:: get('mainpage/add','IndexController@add')->name('add');
Route:: post('mainpage/add','IndexController@store')->name('articleStore');
Route:: get('search/{tagpage}','IndexController@ontags')->name('searchontags');