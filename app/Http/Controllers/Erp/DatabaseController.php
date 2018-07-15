<?php

namespace App\Http\Controllers\Erp;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DatabaseController extends Controller
{
    //ruiguerp我总结的database表结构
    public function list()
    {
        return view('erp.database');
    }
}