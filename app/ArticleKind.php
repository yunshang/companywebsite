<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleKind extends Model
{
    protected $table = 'article_kinds';
    protected $fillable = ['name'];

}
