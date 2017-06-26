<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Article;

class ArticleKind extends Model
{
    protected $table = 'article_kinds';
    protected $fillable = ['name'];

    public function allarticles()
    {
        return $this->hasMany('App\Article');
    }
}
