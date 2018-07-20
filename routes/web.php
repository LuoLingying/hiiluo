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

Route::get('article/borrowed_article_list', ['uses' => 'Article\BorrowedArticleController@list']); //转载文章列表
Route::get('erp/database', ['uses' => 'Erp\DatabaseController@list']); //锐锢ERP数据库总结
Route::any('/upload', 'Uploads\UploadPictureController@uploads'); //文件上传
Route::any('/mail', 'Mail\SentMailController@mail'); //发送邮件


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
