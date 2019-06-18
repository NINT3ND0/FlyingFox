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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(['register'=> false]);

Route::post('/parse-news', 'HomeController@parseNews');

Route::get('/flights', 'FlightsController@index');



//All routes for flight resource

Route::get('/home/edit-flights', 'HomeController@showFlights');

Route::get('/home/edit-flights/{flight}', 'HomeController@editFlight');

Route::patch('/home/edit-flights/{flight}', 'HomeController@updateFlight');

Route::delete('/home/edit-flights/{flight}', 'HomeController@deleteFlight');

Route::get('/home/create-flight', 'HomeController@createFlight');

Route::post('/home/edit-flights', 'HomeController@storeFlight');



//Routes for news

Route::get('/news', 'ArticleController@printArticles' );

Route::get('/news/{slug}', 'ArticleController@showArticle');

Route::get('/news/recent', 'ArticleController@showRecentArticles');
