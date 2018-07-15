<?php

namespace App\Http\Controllers\Article;

use Illuminate\Http\Request;
use App\Model\Article\TransArticle;
use App\Http\Controllers\Controller;

class TransArticleController extends Controller
{
    //转载文章列表
    public function list(TransArticle $transArticle)
    {
        $list = $transArticle->list();
        dd($list);
        return view('article.trans_article', [
            'list' => $list
        ]);
    }
}
