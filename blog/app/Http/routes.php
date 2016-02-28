<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::resource("tweets","TweetController");
});

//Article Resources
/*******************************************************/
Route::resource('article','ArticleController');
Route::post('article/{id}/update','ArticleController@update');
Route::get('article/{id}/delete','ArticleController@destroy');
Route::get('article/{id}/deleteMsg','ArticleController@DeleteMsg');
/********************************************************/

//Publish Resources
/*******************************************************/
Route::resource('publish','PublishController');
Route::post('publish/{id}/update','PublishController@update');
Route::get('publish/{id}/delete','PublishController@destroy');
Route::get('publish/{id}/deleteMsg','PublishController@DeleteMsg');
/********************************************************/

//Client Resources
/*******************************************************/
Route::resource('client','ClientController');
Route::post('client/{id}/update','ClientController@update');
Route::get('client/{id}/delete','ClientController@destroy');
Route::get('client/{id}/deleteMsg','ClientController@DeleteMsg');
/********************************************************/

//Product Resources
/*******************************************************/
Route::resource('product','ProductController');
Route::post('product/{id}/update','ProductController@update');
Route::get('product/{id}/delete','ProductController@destroy');
Route::get('product/{id}/deleteMsg','ProductController@DeleteMsg');
/********************************************************/

//Order Resources
/*******************************************************/
Route::resource('order','OrderController');
Route::post('order/{id}/update','OrderController@update');
Route::get('order/{id}/delete','OrderController@destroy');
Route::get('order/{id}/deleteMsg','OrderController@DeleteMsg');
/********************************************************/

//Image Resources
/*******************************************************/
Route::resource('image','ImageController');
Route::post('image/{id}/update','ImageController@update');
Route::get('image/{id}/delete','ImageController@destroy');
Route::get('image/{id}/deleteMsg','ImageController@DeleteMsg');
/********************************************************/
