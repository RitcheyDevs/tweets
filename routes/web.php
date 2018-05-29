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

Route::get('/', 'PagesController@index');
//Route::get('/home', 'PagesController@home');
Route::get('/profile', 'PagesController@profile');
Route::get('/create_tweet', 'PagesController@create');
Route::get('/search', 'PagesController@search');
Route::get('/profile/edit', 'PagesController@profileEdit');
Route::post('/profile/edit', [
    'as' => 'user.edit',
    'uses' => 'UsersController@edit'
]);
Route::resource('tweets', 'TweetsController');
Route::get('/home', 'TweetsController@index');
Route::get('/user/view/{id}', 'UsersController@viewUser');
Route::get('liketweet', 'TweetsController@like');
Auth::routes();


