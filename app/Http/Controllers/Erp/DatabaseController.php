<?php

namespace App\Http\Controllers\Erp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DatabaseController extends Controller
{
    //ruiguerp我总结的database表结构 第一次
    public function list_1()
    {
        return view('erp.database_1');
    }

    //ruiguerp我总结的database表结构 第二次
    public function list_2()
    {
        return view('erp.database_2');
    }
}