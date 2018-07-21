<?php

namespace App\Http\Controllers\Uploads;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class UploadPictureController extends Controller
{
    public function uploads(Request $request)
    {
        if($request->isMethod('POST'))
        {
            $file = $request->file('resource');
            if ($file->isValid()){
                //原文件名
                $originalName = $file->getClientOriginalName();
                //扩展名
                $ext = $file->getClientOriginalExtension();
                //MimeType
                $type = $file->getClientMimeType();
                //临时绝对路径
                $realPath = $file->getRealPath();

                $fileName = date('Y-m-d-H-i-s') . '-' . uniqid() .  '.' . $ext;
                $res = Storage::disk('uploads')->put($fileName, file_get_contents($realPath));
                dd($res);
                exit();
            }
        }
        return view('uploads.upload');
    }
}
