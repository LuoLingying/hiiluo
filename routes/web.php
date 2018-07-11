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
    return view('index');
});

Route::get('article/trans_article_list', ['uses' => 'Article\TransArticleController@list']);
Route::get('erp/database', ['uses' => 'Erp\DatabaseController@list']);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
