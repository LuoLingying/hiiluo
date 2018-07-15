<?php

namespace App\Model\Article;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TransArticle extends Model
{
    protected $table = 'trans_article';

    public function list()
    {
        return DB::table($this->table)->get();
    }
}
