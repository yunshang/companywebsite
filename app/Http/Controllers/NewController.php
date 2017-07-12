<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;
use App\Repositories\Admin\ArticleRepository;
use App\Article;
use Illuminate\Pagination\Paginator;
use App\Repositories\Admin\SettingRepository;




class NewController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $articles;
    protected $setting;
    public function __construct(ArticleRepository $articles, SettingRepository $setting)
    {
        $this->articles = $articles;
        $this->setting = $setting;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $setting = parent::getsetting($this->setting);
        $article = $this->articles->byId($id);
        $nextarticle = $this->articles->findnextartice($id);
        return view('new',compact(['article','nextarticle','setting']));
    }

    public function newlist(Request $request)
    {
        $setting = parent::getsetting($this->setting);
        $filter = $request->get('filter');
        $articles = $this->articles->filterArticles($filter);
        return view('newlist',compact(['articles','setting','filter']));
    }
}
