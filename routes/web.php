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
//锐锢ERP数据库总结
Route::get('erp/database', ['uses' => 'Erp\DatabaseController@list']);
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
