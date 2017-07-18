<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $fillable = ['title', 'body', 'user_id','is_first','cover','article_kind_id'];


    //设置问题显示
    public function isHidden()
    {
        return $this->is_hidden === 'T';
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopePublished($query)
    {
        return $query->where('is_hidden','F');
    }


}
