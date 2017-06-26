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
    public function index()
    {
//        $user = User::find(2);
//        dd(Auth::user());
        return view('new');
    }
    public function newlist()
    {
        $companyarticles = $this->articles->getcompanyArticles();
        $industryarticles = $this->articles->getindustryArticles();
        return view('newlist',compact(['companyarticles','industryarticles']));
    }
}
