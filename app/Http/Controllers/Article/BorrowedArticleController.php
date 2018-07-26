<?php

namespace App\Http\Controllers\Article;

use App\Exceptions\HLogicException;
use App\Model\Article\BorrowedArticle;
use App\Http\Controllers\SuperController;
use Illuminate\Mail\Message;

class BorrowedArticleController extends SuperController
{
    //转载文章列表
    public function list(BorrowedArticle $borrowedArticle)
    {
        $list = $borrowedArticle->list();
        return view('article.borrowed_article', [
            'list' => $list
        ]);
    }

    public function edit(BorrowedArticle $borrowedArticle)
    {
        if(!empty($this->input)) {
            $article = [
                'title' => $this->input['title'],
                'href' => $this->input['href'],
                'description' => $this->input['description'],
                //tag的逻辑想好后添加tag存储
                'created_at' => hDate(),
                'updated_at' => hDate()
            ];
            $res = $borrowedArticle->save($article);
            if($res) {
                return redirect('article/borrowed_article');
            }
            return hJsonError('添加失败！');
        };
        return view('article.borrowed_article_edit');
    }
}
