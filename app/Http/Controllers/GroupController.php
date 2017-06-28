<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;
use App\Repositories\Admin\ArticleRepository;
use App\Article;

class GroupController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $article;
    public function __construct(ArticleRepository $article)
    {
        $this->article = $article;
    }

    public function index()
    {
        $articles = $this->article->getlastArticles();
        return view('group',compact('articles'));
    }
}
