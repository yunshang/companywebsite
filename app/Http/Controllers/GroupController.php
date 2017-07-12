<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;
use App\Repositories\Admin\ArticleRepository;
use App\Repositories\Admin\SettingRepository;
use App\Article;

class GroupController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $article;
    protected $setting;
    public function __construct(ArticleRepository $article, SettingRepository $setting)
    {
        $this->setting = $setting;
        $this->article = $article;
    }

    public function index()
    {
        $setting = parent::getsetting($this->setting);
        $articles = $this->article->getlastArticles();
        return view('group',compact(['articles','setting']));
    }
}
