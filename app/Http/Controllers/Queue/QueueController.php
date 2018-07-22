<?php

namespace App\Http\Controllers\Queue;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Jobs\SendEmail;

class QueueController extends Controller
{
    public function queue()
    {
        dispatch(new SendEmail('852259456@qq.com'));
    }
}
