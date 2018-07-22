<?php

namespace App\Http\Controllers\Log;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class LogController extends Controller
{
    public function writeLog()
    {
        $id = '001';
        Log::info('这是一条info级别的日志', ['id' => $id]);
    }
}
