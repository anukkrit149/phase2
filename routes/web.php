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
    return view('landing');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/create_article','HomeController@getPostFormArticles');

Route::get('categories','HomeController@getCategories');


Route::get('/landing',function (){
    return view('log-reg');
});

Route::get('/account',function (){
    return view('account');
});
Route::get('/password',function (){
    return view('pass');
});
Route::get('/settings',function (){
    return view('settings');
});
Route::get('/employment',function (){
    return view('employment');
});

Route::get('/feed', function () {
    return view('feed');
});

Route::get('/user',function (){
    return view('userProfile');
});

Route::get('/dashboard',function (){
    return view('dashboard');
});


