<?php
namespace App\Repositories\Admin;

use App\Article;
use App\ArticleKind;

class ArticleKindRepository
{
    public function byId($id)
    {
        return ArticleKind::find($id);
    }

    //创建问题
    public function ArticleKind(array $attributes)
    {
        return ArticleKind::create($attributes);
    }

}
