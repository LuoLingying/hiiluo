<?php

namespace App\Model\Article;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BorrowedArticle extends Model
{
    protected $table = 'borrowed_article';

    public function list()
    {
        return DB::table($this->table)->get();
    }

    public function save($article = [])
    {
        return DB::table($this->table)->insert($article);
    }
}
