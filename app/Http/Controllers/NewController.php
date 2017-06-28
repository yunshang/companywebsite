<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;
use App\Repositories\Admin\ArticleRepository;
use App\Article;
use Illuminate\Pagination\Paginator;




class NewController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $articles;
    public function __construct(ArticleRepository $articles)
    {
        $this->articles = $articles;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $article = $this->articles->byId($id);
        $nextarticle = $this->articles->findnextartice($id);
        return view('new',compact(['article','nextarticle']));
    }

    public function newlist(Request $request)
    {
        $filter = $request->get('filter');
        $articles = $this->articles->filterArticles($filter);
        return view('newlist',compact('articles'));
    }
}
