<?php

namespace App\Http\Controllers\Article;

use Illuminate\Http\Request;
use App\Model\Article\BorrowedArticle;
use App\Http\Controllers\Controller;

class BorrowedArticleController extends Controller
{
    //转载文章列表
    public function list(BorrowedArticle $borrowedArticle)
    {
        $list = $borrowedArticle->list();
        return view('article.borrowed_article', [
            'list' => $list
        ]);
    }
}
