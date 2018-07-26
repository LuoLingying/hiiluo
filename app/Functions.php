<?php

/*
 * 全局使用的自定义函数
 * 命名规则：驼峰式，以小写h开头，尽量短；若仅在当前文件使用则以_开头；
 */

use App\Exceptions\KnownLogicException;
use Illuminate\Support\Facades\Mail;

/**
 * 返回正常请求结果json
 * @param string $msg
 * @param array $data
 * @return type
 */
function hJson($msg = '加载成功', $data = [])
{
    if (!empty($data)) {
        return response()->json(['code' => 200, 'msg' => $msg, 'data' => $data]);
    } else {
        return response()->json(['code' => 200, 'msg' => $msg]);
    }
}

/**
 * 返回异常请求结果json
 * @param string $msg
 * @param int $code
 * @return string response
 */
function hJsonError($msg, $code = 0)
{
    if (200 == $code) {
        $code = 0;
    }
    return response()->json(['code' => $code, 'msg' => $msg]);
}

/**
 * 返回当前时间如2018-06-27 08:00:00
 */
function hDate()
{
    return date('H-m-d H:i:s');
}