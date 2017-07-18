<?php
namespace App\Repositories\Admin;

use App\Article;
use App\ArticleKind;

class ArticleRepository
{
    public function byId($id)
    {
        return Article::find($id);
    }

    public function findnextartice($id)
    {
        $nextid = Article::where('id', '>', $id)->min('id');
        return Article::find($nextid);
    }

    public function getArticlesFeed()
    {
        return Article::published()->latest('updated_at')->with('user')->get();
    }

    public function Article(array $attributes)
    {
        return Article::create($attributes);
    }

    public function filterArticles($filter)
    {
        $articlekind = ArticleKind::where('name',$filter=='company' ? '公司新闻' : '行业新闻')->firstOrFail();
        return $articlekind ->allarticles()->published()->latest('updated_at')->with('user')->paginate(5);
    }
    
    public function getlastArticles()
    {
        return Article::published()->latest('updated_at')->take(3)->get();
    }

    public function getcompanyArticles()
    {
        $articlekind = ArticleKind::where('name','公司新闻')->firstOrFail();
        return $articlekind ->allarticles()->published()->latest('updated_at')->with('user')->paginate(5);
    }

    public function getindustryArticles()
    {
        $articlekind = ArticleKind::where('name','行业新闻')->firstOrFail();
        return $articlekind ->allarticles()->published()->latest('updated_at')->with('user')->paginate(5);
    }
}
