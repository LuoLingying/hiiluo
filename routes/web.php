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

//转载文章列表
Route::get('article/borrowed_article_list', ['uses' => 'Article\BorrowedArticleController@list']);
Route::any('article/borrowed_article_edit', ['uses' => 'Article\BorrowedArticleController@edit']);
//锐锢ERP数据库总结
Route::get('erp/database_1', ['uses' => 'Erp\DatabaseController@list_1']);
Route::get('erp/database_2', ['uses' => 'Erp\DatabaseController@list_2']);
//文件上传
Route::any('/uploads', 'Uploads\UploadPictureController@uploads');
//发送邮件
Route::any('/mail', 'Mail\SentMailController@mail');

Auth::routes();


//慕课课程学习
//anth 自带的登录注册功能
Route::get('/home', 'HomeController@index')->name('home');
//laravel中的文件上传
Route::get('/upload', 'Article\BorrowedArticleController@upload');
//日志记录
Route::get('/log', 'Log\LogController@writeLog');
//队列
Route::get('/queue', 'Queue\QueueController@queue');
