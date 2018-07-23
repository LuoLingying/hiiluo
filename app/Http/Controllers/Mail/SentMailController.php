<?php

namespace App\Http\Controllers\Mail;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class SentMailController extends Controller
{
    public function mail()
    {
        Mail::raw('邮件内容 测试', function($message){
            $message->from('18817776734@163.com', '海螺网');
            $message->subject('邮件主题 测试');
            $message->to('852259456@qq.com');
        });
    }
}
