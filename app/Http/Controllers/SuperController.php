<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperController extends Controller
{

    public $input = [];

    /**
     * 构造方法
    */
    public function __construct(Request $request)
    {
        // 获取请求参数
        $this->input = $this->_trim_input($request->all());
    }

    /**
     * 去除input中的左右空格
     * @param type $input
     * @return type
    */
    public function _trim_input($input)
    {
        if (empty($input)) {
            return $input;
        }
        foreach ($input as &$value) {
            if (is_array($value)) {
                $this->_trim_input($value);
            } else {
                $value = trim($value);
            }
        }
        unset($value);
        return $input;
    }
}